import toggleMenu from "./menu.js";
import manageSlider from "./slider.js";

function main() {
  toggleMenu();
  manageSlider();
}

document.addEventListener('DOMContentLoaded', () => {
  main()
})

// disable transition until window is completly loaded
window.addEventListener('load', (event) => {
  document.querySelector('.preload').classList.remove("preload");
});