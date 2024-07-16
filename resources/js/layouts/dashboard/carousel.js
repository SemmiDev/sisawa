// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "../../../css/layouts/dashboard/carousel.css";

const dashboardCarousel = new Swiper(".swiper", {
    modules: [Navigation, Pagination, Autoplay],
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 10000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
});
