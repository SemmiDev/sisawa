import Sortable from "sortablejs";

Sortable.create($("#susun-spok").get(0), { animation: 150 });

const $container = $("#susun-spok");

$(".mriksa").on("click", function () {
    $container.find(".word").each(function (index, word) {
        const $word = $(word);

        if ($word.data("idx") == index) {
            $word.find(".result").html("✅");
        } else {
            $word.find(".result").html("❌");
        }
    });
});
