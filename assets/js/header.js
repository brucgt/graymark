const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const navItem = document.querySelector(".nav-item");
const dropToggles = document.querySelectorAll(".dropdown-toggle");
const backToTop = document.querySelector(".backToTop");
// const dropDown = document.querySelector(".dropdown-menu");

// console.log(navToggle.innerHTML);?
navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("active");
 });

// dropToggle.addEventListener("click", () => {
//   dropDown.classList.toggle("active");
//   dropToggle.classList.toggle("active");
//  });

// for(let i = 0; i < dropToggles.length; i++){
//   const dropDown = dropToggles[i].querySelector(".dropdown-menu");
//   dropToggles[i].addEventListener("click", function (){
//   dropDown.classList.toggle("active");
//   dropToggles[i].classList.toggle("active");
//   });
// } 

dropToggles.forEach(function(dropToggle){
  const dropDown = dropToggle.querySelector(".dropdown-menu");
  dropToggle.addEventListener("click", function (){
  dropDown.classList.toggle("active");
  dropToggle.classList.toggle("active");
  });
});

window.addEventListener('click', function(e){   
  dropToggles.forEach(function(dropToggle){
    const dropDown = dropToggle.querySelector(".dropdown-menu");
    if (!dropToggle.contains(e.target)){
      dropDown.classList.remove("active");
      dropToggle.classList.remove("active");
    }
  });
});

if (typeof backToTop !== 'undefined' && backToTop !== null) {
  window.addEventListener("scroll", function() {
    if(window.scrollY >= 150) {
      backToTop.classList.add("visible");
    }else {
      backToTop.classList.remove("visible");
    }
  });
  backToTop.addEventListener("click", function() {
    window.scrollTo(0, 0);
  });
}

function hasClass(ele,cls) {
  return !!ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
}
function addClass(ele, cls) {
  if (!hasClass(ele, cls)) ele.className += " " + cls;
}
function removeClass(ele, cls) {
  if (hasClass(ele, cls)) {
    var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
    ele.className = ele.className.replace(reg, ' ');
  }
}