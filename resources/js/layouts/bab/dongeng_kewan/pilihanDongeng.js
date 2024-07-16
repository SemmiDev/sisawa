// core version + navigation, pagination modules:
import Swiper from "swiper";
import { Navigation, FreeMode } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";

window.listTembangCarousel = new Swiper(".list-dongeng", {
    modules: [Navigation, FreeMode],
    slidesPerView: "auto",
    freeMode: true,
    centeredSlides: true,
    centeredSlidesBounds: true,
    initialSlide: document.querySelector(".list-dongeng").dataset.initialindex,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
