const toggleBtn = document.getElementsByClassName("toggle-btn")[0];
const navmenu = document.getElementsByClassName("nav-menu")[0];
toggleBtn.onclick = function () {
    navmenu.classList.toggle("active");
}

window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})