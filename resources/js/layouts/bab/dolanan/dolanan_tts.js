import { createElement, CircleCheck, CircleX, CircleAlert } from "lucide";

const $section = $(".pitakonan");
let $prev = null;

$section.find(".opsi-jawaban").click(function () {
    const $a = $(this);
    $a.addClass("selected").find('input[type="radio"]').prop("checked", true);
    $prev ? $prev.removeClass("selected") : null;
    $prev = $a;
});

$section.find(".mriksa").click(function (event) {
    const $btn = $(event.target);
    const $jawaban = $section.find(".jawaban");
    const $dipilih = $section.find('input[type="radio"]:checked');

    if ($btn.data("wangsulan") == $dipilih.val()) {
        const iconCheck = createElement(CircleCheck);
        $jawaban.find(".icon").html(iconCheck);
        $jawaban.find(".pesan").text("Wangsulan bener");
        $jawaban
            .removeClass("alert-error")
            .addClass("alert-success")
            .removeClass("hidden");
    } else {
        const iconX = createElement(CircleX);
        $jawaban.find(".icon").html(iconX);
        $jawaban.find(".pesan").text("Wangsulan keliru");
        $jawaban
            .removeClass("alert-success")
            .addClass("alert-error")
            .removeClass("hidden");
    }
});
