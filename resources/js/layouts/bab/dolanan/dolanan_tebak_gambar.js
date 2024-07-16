// core version + navigation, pagination modules:
// import Swiper from "swiper";
// import { Navigation, FreeMode } from "swiper/modules";
// import "swiper/css";
// import "swiper/css/navigation";

// window.swiper = new Swiper(".swiper", {
//     modules: [Navigation, FreeMode],
//     slidesPerView: "auto",
//     freeMode: true,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });
let $prev = null;

$(".grid-soal .card").on("click", function () {
    if ($prev) {
        $prev.find(".overlay").css({ backgroundColor: "" });
    }
    const $el = $(this);
    $el.find("input").prop("checked", true);
    $el.find(".overlay").css({ backgroundColor: "rgb(0, 169, 110)" });
    $prev = $el;
});

$(".mulai").on("click", function () {
    $(".grid-soal .overlay").css({ opacity: 1, backgroundColor: "" });
    $(".pertanyaan-gambar").css({
        opacity: 1,
        maxWidth: "15rem",
        maxHeight: "15rem",
    });
    $(".petunjuk").hide();
    $(".pertanyaan").show();
    $(".mulai").hide();
    $(".mriksa").show();
    $(".tebak-gambar-input").prop("checked", false);

    // TODO: pilih gambar acak
});

$(".mriksa").on("click", function () {
    const $radio = $(".tebak-gambar-input:checked");
    const $container = $radio.parent();
    const wangsulan = $(".pertanyaan-gambar").data("wangsulan");

    if (wangsulan == "gambar" + $radio.val()) {
        Swal.fire({
            title: "Slamet!",
            text: "Wangsulanmu bener",
            icon: "success",
            confirmButtonText: "Nggih",
        });
    } else {
        Swal.fire({
            title: "Keliru!",
            text: "Wangsulanmu durung pas",
            icon: "error",
            confirmButtonText: "Nyoba Maneh",
        });
    }

    $container.find(".overlay").css({ opacity: 0 });
});
