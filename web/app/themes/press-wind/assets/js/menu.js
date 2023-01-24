export default function toggleMenu() {
    let burger = document.querySelector('#burger');
    let body = document.querySelector('body');

    let svg = document.querySelector('#t');

    console.log(svg)

    burger.addEventListener('click', (e) => {
        body.classList.toggle("menu-is-open");
    })
}