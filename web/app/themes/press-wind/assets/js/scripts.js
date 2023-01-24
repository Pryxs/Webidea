import toggleMenu from "./menu.js";


function main() {
  toggleMenu();

}

document.addEventListener('DOMContentLoaded', () => {
  main()
})

// disable transition until window is completly loaded
window.addEventListener('load', (event) => {
  document.querySelector('.preload').classList.remove("preload");
});