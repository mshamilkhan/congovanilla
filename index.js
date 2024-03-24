const hamburger = document.getElementById("hamburger");
const menuToggle = document.querySelector(".NavOption.MenuToggle");

hamburger.addEventListener("click", () => {
    menuToggle.classList.toggle("hidden");
});