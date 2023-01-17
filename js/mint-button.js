const TOKENID = 1;
const AMOUNT = 1;


async function buyPizzas() {
  let gas = await web3.eth.getGasPrice();
  let txn = new web3.eth.Contract(SHOP_ABI, SHOP);

  console.log(gas);

  await txn.methods.buyPizzas( TOKENID, AMOUNT ).send({ from:walletAddress, amount:0, gasPrice:(gas*3)});
}

$(function() {
  $('#mintButton').click(function(e) {
    e.preventDefault();
    if ($(this).hasClass('approve')) {
      // set approval
      setSpendApproval();
    } else {
      // buy
      buyPizzas();
    }
  });
});