const productNavItem = document.querySelectorAll(".product-nav .nav-item");
var url = window.location.href.split('?')[0];
var urlRegExp = new RegExp(url.replace(/\/$/,"") + "$");

const docBody = document.body;
const divFullScreen = document.getElementById("fullpage");
const imgContainer = divFullScreen.querySelector("img");
const imgs = document.querySelectorAll(".gallery-container img");

productNavItem.forEach(function(item) {    
    if (urlRegExp.test(item.querySelector(".nav-link").href.replace(/\/$/,""))) {
        addClass(item, "active");
    }
});

imgs.forEach(function(img) {
    img.addEventListener("click", function() {
        removeClass(divFullScreen, "hidden");
        docBody.style['overflow-y'] = "hidden";
        imgContainer.src = this.src;
        addClass(divFullScreen, "block");
    });
});
divFullScreen.querySelector(".wrapper").addEventListener("click", function(e) { closeFullScreen(e, this); });
divFullScreen.querySelector(".btn-close").addEventListener("click", function(e) { closeFullScreen(e, this); });

function closeFullScreen(e, el) {
    e = window.e || e; 

    if(el === e.target) {
        removeClass(divFullScreen, "block");
        docBody.style['overflow-y'] = "visible";
        addClass(divFullScreen, "hidden");
    }
}