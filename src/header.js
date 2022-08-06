const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const navItem = document.querySelector(".nav-item");
const dropToggle = document.querySelector(".dropdown-toggle");
const dropDown = document.querySelector(".dropdown-menu");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("active");
 });

dropToggle.addEventListener("click", () => {
  dropDown.classList.toggle("active");
  dropToggle.classList.toggle("active");
 });