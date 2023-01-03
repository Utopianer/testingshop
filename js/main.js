// Hide Menu
document
  .getElementById("hideMenuIcon")
  .addEventListener("click", menuBtnHandleClick);

function menuBtnHandleClick() {
  document.getElementById("mobHideMenu").classList.toggle("show");
  document.getElementById("hideMenuIcon").classList.toggle("is-active");
}

let bodyWrapper = document.querySelectorAll(".bodyWapper");
for (let i = 0; i < bodyWrapper.length; i++) {
  bodyWrapper[i].addEventListener("click", bodyBtnHandleClick);
}
function bodyBtnHandleClick() {
  document.getElementById("mobHideMenu").classList.remove("show");
  document.getElementById("hideMenuIcon").classList.remove("is-active");
}

// Scroll for Mobile
$(window).scroll(function () {
  var currentPosition = window.scrollY;
  console.log(currentPosition);
  if (currentPosition > 70) {
    $("#mobHideMenu, #stickyNavbar").css("background", "black");
  } else {
    $("#mobHideMenu, #stickyNavbar").css("background", "unset");
  }
});

// load more
function loadMore(){
    $("#loadMore").removeClass("loadMore");
    $(".loadMoreMob").removeClass("loadMore");

  // document.querySelector(".loadMoreMob").classList.remove("loadMore")
}

// scroll bar
let lastScrollTop=0
let navBar=document.querySelector(".navbar")
window.addEventListener("scroll",()=>{
  let scrollTop=window.pageYOffset||document.documentElement.scrollTop
  if(scrollTop>lastScrollTop){
    navBar.style.top="-100px"
  }
  else{
    navBar.style="top:0;background-color:rgba(0,0,0,0.7);"

  }
  lastScrollTop=scrollTop
  if(lastScrollTop===0){
    navBar.style="background-color:transperent;"
  }
})

// leader board changer
document.querySelector(".leftArrow").style.display="none"  
function shiftLeft(){
  document.querySelector(".leftArrow").style.display="inline-block"
  document.querySelector(".rightArrow").style.display="none"
  document.getElementById("tableChange1").src="./img/tableTweet.svg"
  document.getElementById("tableChange2").src="./img/tableUser.svg"
  document.getElementById("tableChange3").src="./img/tableMsg.svg"

  document.querySelector('.retweet').classList.add("tweet")
  document.querySelector('.msg').classList.add("user")
  document.querySelector('.like').classList.add("msg")
}
function shiftRight(){
  document.querySelector(".leftArrow").style.display="none"  
  document.querySelector(".rightArrow").style.display="inline-block"
  document.getElementById("tableChange1").src="./img/change.svg"
  document.getElementById("tableChange2").src="./img/tableMsg.svg"
  document.getElementById("tableChange3").src="./img/heart.svg"

  document.querySelector('.retweet').classList.remove("tweet")
  document.querySelector('.like').classList.remove("msg")
  document.querySelector('.msg').classList.remove("user")
}

// responsive leader board buttons
let count=1
$(".toolTip.resp").addClass(`toolTip1`)
function respTable(arrow){
  if(arrow==="right"){
    if(count<5){
      $("#tableChangeResp").attr("src",`./img/t${++count}.svg`)
      $(".toolTip.resp").addClass(`toolTip${count}`)
    }
  }
  if(arrow==="left"){
    if(count>1){
      $("#tableChangeResp").attr("src",`./img/t${--count}.svg`)
      console.log($(".toolTip.resp").removeClass(`toolTip${count+2}`));
      $(".toolTip.resp").removeClass(`toolTip${count+1}`)
    }
  }
}

// account page copy
function copyText(){
  console.log(444);
  let text=document.querySelector(".copyText").innerText
  navigator.clipboard.writeText(text)
  alert("Text copied")
}