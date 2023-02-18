// const menu = document.querySelector('#menu-icon')
// const navbar = document.querySelector('.navbar')

// menu.addEventListener('click',function(){
//   this.classList.toggle('active')
//     navbar.classList.toggle('active')
// })

// window.onscroll = () =>{
//   navbar.classList.remove('active')
// }

const menuIcon = document.querySelector("#menu-icon");
const navbar = document.querySelector("#navbar");

menuIcon.addEventListener("click", () => {
  menuIcon.classList.toggle("bx-x");
  navbar.classList.toggle("active");
});




