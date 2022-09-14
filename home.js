// const searchWrapper = document.querySelector(".search-input");
// const inputBox = searchWrapper.querySelector("input");
// const suggBox = searchWrapper.querySelector(".autocom-box")

// inputBox.onkeyup = (e)=>{
//   let userData = e.target.value;
//   let emptyArray = [];
//   if(userData){
//     emptyArray = suggestions.filter((data)=>{
//       return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
//     });
//     emptyArray = emptyArray.map((data)=>{
//       return data = '<li>'+ data +'</li>';
//     });
//     console.log(emptyArray);
//     searchWrapper.classList.add("active");
//     showSuggestions(emptyArray);
//     let allList = suggBox.querySelectorAll("li");
//     for (let i = 0; i < allList.length; i++) { 
//         allList[i].setAttribute("onclick", "select(this)");
//     }
//   }else{
//     searchWrapper.classList.remove("active");
//   }
 
// }

// function select(element){
//   let selectUserData = element.textContent;
//   inputBox.value = selectUserData;
//   searchWrapper.classList.remove("active");

// }

// function showSuggestions(list){
//   let listData;
//   if(!list.length){
//     userValue = inputBox.value;
//     listData = '<li>'+ userValue + '</lli>';
//   }else{
//       listData = list.join('');
//   }
//   suggBox.innerHTML = listData;
// }



const menu = document.getElementById("hamburger");
const ullist = document.getElementById("ul-list");

hamburger.addEventListener('click', () => {
  ullist.classList.toggle('dropmenu');
});

window.addEventListener('scroll', function () {
  let header = document.querySelector('header');
  let windowPosition = window.scrollY > 1 ;
  header.classList.toggle('down', windowPosition);
}) 







// const secondtargetDiv = document.getElementById("mid");

// const targetDiv = document.getElementById("coinlist");
// const btn = document.getElementById("toggle");
// btn.onclick = function () {
//   if (targetDiv.style.display !== "none") {
//     targetDiv.style.display = "none";
//   } else {
//     targetDiv.style.display = "block";
//   }
// };





// window.setInterval('refresh()', 10000); 	// Call a function every 10000 milliseconds (OR 10 seconds).

//     // Refresh or reload page.
//     function refresh() {
//         window .location.reload();
//     }



    // const message = document.getElementById("");

 const targetDiv = document.getElementById("loginmessage");
//  const btn = document.querySelectorAll("[id='sumbit']");
// const btn = document.getElementById("sumbit");

// btn.forEach(function (btns) {
 function btn() {
    if (targetDiv.style.display !== "block") {
      targetDiv.style.display = "block";
      console.log('block')
    } else {
      targetDiv.style.display = "none";
      console.log('block')
    }
  };


//  btn.onclick = function (){
//   if (targetDiv.style.display !== "block") {
//     targetDiv.style.display = "block";
//     console.log('block')
//   } else {
//     targetDiv.style.display = "none";
//     console.log('block')
//   }
// };

