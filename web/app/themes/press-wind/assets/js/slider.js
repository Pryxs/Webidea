import Swiper, { Navigation } from 'swiper';
// import Swiper styles
import 'swiper/css';

export default function manageSlider(){
    var swiper = new Swiper(".mySwiper", {
        modules: [Navigation],

        slidesPerView: 1,
        spaceBetween: 10,  
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {  
            360: {       
                slidesPerView: 1,
                spaceBetween: 10     
            },   

            740: {       
                slidesPerView: 2,
                spaceBetween: 15     
            }, 
            1450: {       
                slidesPerView: 3,
                spaceBetween: 20     
            }, 
        }  
    })
}