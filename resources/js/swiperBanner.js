import Swiper from 'swiper';  // Import Swiper from the package
import 'swiper/swiper-bundle.css';  // Import Swiper styles

document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".mySwiper", {
        slidesPerView: 1,          // Show 1 slide at a time
        spaceBetween: 0,           // No space between slides
        autoplay: {
            delay: 3000,           // Delay between slides (3 seconds)
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,      // Make the pagination dots clickable
        },
        navigation: {
            nextEl: ".swiper-button-next",  // Next button
            prevEl: ".swiper-button-prev",  // Previous button
        },
        loop: true,                // Loop the slider when reaching the end
    });
});
