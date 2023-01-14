let page = null,
    wallet = null,
    web3 = null,
    pizzaHoldings = [];
    breadHoldings = null;

if (inventoryContainer) {
   page = inventoryContainer.dataset.page
}

const truncateRegex = /^(0x[a-zA-Z0-9]{3})[a-zA-Z0-9]+([a-zA-Z0-9]{3})$/;
const SPENDAMOUNT = 1000000;
const WALLET = '0x503e538f7102d078644f750Daa92b5363e216CDE';
const SHOP_ABI = top.abi_shop;
const SHOP = '0x37322BF16cCF75FDCF2eE22B4361913b0FaCba49'; //Shop Contract
const PIZZA = '0x2953399124F0cBB46d2CbACD8A89cF0599974963'; //OpenSea ERC1155
const PIZZA_ABI = top.abi_pizza;
const BREAD = '0xb8e57A05579b1F4c42DEc9e18E0b665B0dB5277f'; //Bread address
const BREAD_ABI = top.abi_coin;
const BREAD_IMG = 'https://www.boredpizzas.com/img/BAPC-coin.svg';
const OVEN = '0x7e410FcF59dd30bC09E9ad21b008D36b907fC86B'; //Oven address
const OVEN_ABI = top.abi_oven;      
const LIBRARY = top.pizzalib;
const FINNEY = 1000000000000000;
const connectBtn = document.getElementById('connectBtn');

function truncateAddress(address) {
   let match = address.match(truncateRegex);
   if (!match)
      return address;
   return match[1] + "\u2026" + match[2];
};

async function populateWalletData() {
   let walletTruncated = truncateAddress(wallet);
   connectBtn.querySelector('span').innerHTML = walletTruncated;
   connectBtn.classList.add('connected');
   connectBtn.setAttribute('data-bs-toggle', 'dropdown');
   if(document.querySelector('.wallet-address')){
      document.querySelector('.wallet-address').innerHTML = walletTruncated;
      document.querySelector('.wallet-address').setAttribute('data-copy', wallet);
      walletCont.style.display = 'block';
   }

   web3 = new Web3(window.ethereum);

   // VERIFY CORRECT CHAIN LOADED IN WALLET OR REQUEST CHANGE NETWORK
   let chainId = await web3.eth.getChainId();
   if (chainId != 137){
      await window.ethereum.request({
         method: 'wallet_switchEthereumChain',
         params: [{chainId: '0x89'}],
      });
      window.location.reload();
   }

   //PULL PIZZA DATA AND STORE IT LOCALLY
   await getUserAssets();

   // IF BURN OVEN, CHECK APPROVAL
   if (page === 'burn-oven') {
      await checkApproval();
   }
}

async function connectWallet() {
   // CONNECT TO USER WALLET
   let provider = window.ethereum;
   if (provider) {
      provider.request({
         method: 'eth_requestAccounts',
      })
      .then(wallets => {
         wallet = wallets[0];
         populateWalletData();
      })
      .catch(error => {
         console.log(error);
         return;
      });
   }
}

async function checkConnection() {
   ethereum.request({ method: 'eth_accounts' }).then(handleAccountsChanged).catch(console.error);
}

async function handleAccountsChanged(accounts) {
   if (accounts[0] !== wallet) {
      wallets = accounts;
      wallet = wallets[0];

      // Load wallet data
      populateWalletData();
   }
}

async function getUserAssets() {
   let jlength = LIBRARY.length
   let walletArray = [];
   let pizzaIdArray = [];

   for (i=0; i<jlength; i++) {
      pizzaIdArray.push(LIBRARY[i]['tokenid']);
      walletArray.push(wallet);
   }

   let pizzaTxn = new web3.eth.Contract(PIZZA_ABI, PIZZA);
   pizzaHoldings = await pizzaTxn.methods.balanceOfBatch(walletArray, pizzaIdArray).call();

   let breadTxn = new web3.eth.Contract(BREAD_ABI, BREAD);
   breadHoldings = await breadTxn.methods.balanceOf(wallet).call();
   breadHoldings = web3.utils.fromWei(breadHoldings, 'ether');

   let breadBalanceEles = document.querySelectorAll('.bread-balance');
   for(var i=0;i<breadBalanceEles.length;i++) {
      breadBalanceEles[i].innerHTML = parseFloat(breadHoldings).toLocaleString();
   }

   /* Account Inventory */
   inventoryContainer.innerHTML = '';
   let totalInventoryQuantity = 0;
       totalValue = 0;

   for (const [i, quantity] of pizzaHoldings.entries()) {
      // if token is held
      if (quantity !== '0') {
         let tokenName = LIBRARY[i]['name'],
             imageName = tokenName.replace(/\s+/g, '-').toLowerCase(),
             category = LIBRARY[i]['category'],
             value = LIBRARY[i]['price'];

         // build HTML
         if (page === 'burn-oven') {
            pizzaEle = `<div class="col-3">
                           <div class="itemImageParent inventoryItem" data-token-name="${tokenName}" data-image-name="${imageName}" data-quantity="${quantity}" data-value="${value}" data-index="${i}">
                              <span class="itemRate">${quantity}</span>
                              <img
                                class="itemImg"
                                src="./img/pizzas/${imageName}.jpg"
                                alt="${tokenName}"
                              />
                           </div>
                        </div>`;
         } else {
            pizzaEle = `<div class="col inventoryItem mt-4">
                              <div class="shopCard">
                                 <img
                                    class="shopCardImg"
                                    src="./img/pizzas/${imageName}.jpg"
                                    alt=""
                                 />
                                 <div class="shopCardFooter">
                                    <p class="category">${category}</p>
                                    <p class="cardText">${tokenName}</p>
                                    <p class="cardText odd">
                                       <img src="./img/bpac-sm-icon.svg" alt="" /> ${value}
                                    </p>
                                    <a href="#" class="mainBtn light shopBtn">Mint Now</a>
                                 </div>
                              </div>
                           </div>`;
         }

         // increment total quantity
         totalInventoryQuantity = (totalInventoryQuantity + parseInt(quantity));

         // increment total value
         totalValue += (value * quantity);

         // populate inventory and value
         inventoryContainer.insertAdjacentHTML('beforeend', pizzaEle);
      }
   }

   if (page === 'burn-oven') {
      document.querySelector('#totalInventoryQuantity span').innerHTML = parseFloat(totalInventoryQuantity).toLocaleString();
   }

   let breadValueEles = document.querySelectorAll('.pizza-bread-value');
   for(var i=0;i<breadValueEles.length;i++) {
      breadValueEles[i].innerHTML = parseFloat(totalValue).toLocaleString();
   }
}

async function addToWallet(tokenAddress, tokenSymbol, tokenImage) {
   if (window.ethereum) {
      const wasAdded = await ethereum.request({
         method: 'wallet_watchAsset',
         params: {
            type: 'ERC20',
            options: {
               address: tokenAddress,
               symbol: tokenSymbol,
               decimals: 18,
               image: tokenImage
            }
         }
      })
      if (wasAdded) {
         console.log('$'+tokenSymbol+' added to wallet.');
      }
   }
}

async function setApproval() {
   let gas = await web3.eth.getGasPrice();

   let txn = new web3.eth.Contract(PIZZA_ABI, PIZZA);
   await txn.methods.setApprovalForAll( OVEN, true ).send({ from:wallet, amount:0, gasPrice:(gas*3) });

   await checkApproval();
}

async function checkApproval() {
   let txn = new web3.eth.Contract(PIZZA_ABI, PIZZA);
   let isApproved = await txn.methods.isApprovedForAll( wallet, OVEN ).call();

   if (!isApproved) {
      burnButton.innerHTML = 'APPROVE';
      burnButton.classList.add('approve');
   }

   burnButton.style.display = 'inline-block';
}

$(function() {
   $('#connectBtn').click(function() {
      if (!$(this).hasClass('connected')) {
         connectWallet();
      }
   });

   checkConnection();
});

async function setSpendApproval() {
   let gas = await web3.eth.getGasPrice();

   let txn = new web3.eth.Contract(BREAD_ABI, BREAD);
   await txn.methods.approve( SHOP, SPENDAMOUNT ).send({ from:wallet, amount:0, gasPrice:(gas*3) });

   await allowance();
}

async function allowance() {
   let txn = new web3.eth.Contract(WALLET, SHOP);
   let isApproved = await txn.methods.allowance( WALLET, SHOP ).call();

   if (!isApproved) {
      mintButton.innerHTML = 'APPROVE';
      mintButton.classList.add('approve');
   }

   mintButton.style.display = 'inline-block';
}