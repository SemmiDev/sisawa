// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, FreeMode } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";

window.listTembangCarousel = new Swiper(".list-tembang", {
    modules: [Navigation, FreeMode],
    slidesPerView: "auto",
    freeMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
