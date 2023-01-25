import toggleMenu from "./menu.js";
// import manageForm from "./form.js";

function main() {
  toggleMenu();
  // manageForm();
}

document.addEventListener('DOMContentLoaded', () => {
  main()
})

// disable transition until window is completly loaded
window.addEventListener('load', (event) => {
  document.querySelector('.preload').classList.remove("preload");
});