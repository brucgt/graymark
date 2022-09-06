const productNavItem = document.querySelectorAll(".product-nav .nav-item");
var url = window.location.href.split('?')[0];
var urlRegExp = new RegExp(url.replace(/\/$/, "") + "$");

const docBody = document.body;
const divFullScreen = document.getElementById("fullpage");

if (typeof divFullScreen !== 'undefined' && backToTop !== null) {
    const imgContainer = divFullScreen.querySelector("img");
    const galleryItems = document.querySelectorAll(".gallery-container .gallery-item");

    galleryItems.forEach(function (item) {
        item.addEventListener("click", function () {
            removeClass(divFullScreen, "hidden");
            docBody.style['overflow-y'] = "hidden";
            imgContainer.src = this.firstChild.src;
            addClass(divFullScreen, "block");
        });
    });
    divFullScreen.querySelector(".wrapper").addEventListener("click", function (e) {
        e = window.e || e;

        if (this === e.target) {
            closeFullScreen();
        }
    });
    divFullScreen.querySelector(".btn-close").addEventListener("click", closeFullScreen);

    function closeFullScreen() {
        removeClass(divFullScreen, "block");
        docBody.style['overflow-y'] = "visible";
        addClass(divFullScreen, "hidden");
    }
}

productNavItem.forEach(function (item) {
    if (urlRegExp.test(item.querySelector(".nav-link").href.replace(/\/$/, ""))) {
        addClass(item, "active");
    }
});