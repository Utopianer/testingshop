let wallets = null,
    wallet = null,
    web3 = null,
    pizzaHoldings = [];
    breadHoldings = null;

const truncateRegex = /^(0x[a-zA-Z0-9]{3})[a-zA-Z0-9]+([a-zA-Z0-9]{3})$/;
const PIZZA = '0x2953399124F0cBB46d2CbACD8A89cF0599974963'; //OpenSea ERC1155
const PIZZA_ABI = top.abi_pizza;
const BREAD = '0xb8e57A05579b1F4c42DEc9e18E0b665B0dB5277f'; //Coin address
const BREAD_ABI = top.abi_coin;
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

async function connectWallet() {
   // CONNECT TO USER WALLET
   if(window.ethereum){
      try {
         wallets = await window.ethereum.request({
            method: 'eth_requestAccounts',
         });
         wallet = wallets[0];
         walletTruncated = truncateAddress(wallet);

         connectBtn.querySelector('span').innerHTML = walletTruncated;
         connectBtn.classList.add('connected');
         connectBtn.setAttribute('data-bs-toggle', 'dropdown');
         document.querySelector('.wallet-address').innerHTML = walletTruncated;
         document.querySelector('.wallet-address').setAttribute('data-copy', wallet);
         walletCont.style.display = 'block';

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

         // ADD PAGE UPDATE CODE AFTER WALLET CONNECT HERE
         await checkApproval();
      } catch (error) {
         console.log(error)
      }
   }
}

async function getUserAssets() {
   let jlength = LIBRARY.length
   let walletArray = [];
   let pizzaIdArray = [];

   for (i=0; i<jlength; i++) {
      pizzaIdArray.push(LIBRARY[i]['tokenid']);
      walletArray.push(wallets[0]);
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
   let totalValue = 0;
   for (const [i, quantity] of pizzaHoldings.entries()) {
      // if token is held
      if (quantity !== '0') {
         let tokenName = LIBRARY[i]['name'],
             imageName = tokenName.replace(/\s+/g, '-').toLowerCase(),
             category = LIBRARY[i]['category'],
             value = LIBRARY[i]['price'],
             pizzaEle = `<div class="col mt-4">
                           <div class="shopCard">
                              <img
                                 class="shopCardImg"
                                 src="img/pizzas/${imageName}.jpg"a
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
         // increment total value
         totalValue += (value * quantity);

         // populate inventory and value
         inventoryContainer.insertAdjacentHTML('beforeend', pizzaEle);
      }
   }

   let breadValueEles = document.querySelectorAll('.pizza-bread-value');
   for(var i=0;i<breadValueEles.length;i++) {
      breadValueEles[i].innerHTML = parseFloat(totalValue).toLocaleString();
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

   // if (isApproved) {
   //    document.getElementById('burnbutton').innerHTML = '<button id="burnPizza" class="btn" onClick="burnPizzas();">Burn</button><button id="burnPizza" class="btn" onClick="addToWallet();">Add to wallet</button>';
   // } else {
   //    document.getElementById('burnbutton').innerHTML = '<button id="burnPizza" class="btn" onClick="setApproval();">Allow Burning</button><button id="burnPizza" class="btn" onClick="addToWallet();">Add BREAD to wallet</button>';
   // }
}

$(function() {
   $('#connectBtn').click(function() {
      if (!$(this).hasClass('connected')) {
         connectWallet();
      }
   });
});