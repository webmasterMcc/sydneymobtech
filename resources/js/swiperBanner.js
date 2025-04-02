// resources/js/swiperBanner.js
import Swiper from 'swiper';  // Import Swiper from the package
import 'swiper/swiper-bundle.css';  // Import Swiper styles

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
console.log(Swiper)