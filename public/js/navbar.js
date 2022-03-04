var btn = document.querySelector(".mobile-menu-button");
var menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", function () {
    menu.classList.toggle("hidden");
});
