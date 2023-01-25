import Swiper, { Navigation } from 'swiper';
// import Swiper styles
import 'swiper/css';

export default function manageSlider(){
    var swiper = new Swiper(".mySwiper", {
        modules: [Navigation],

        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    })
}