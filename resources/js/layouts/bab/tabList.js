import { createIcons, ChevronLeft, ChevronRight } from "lucide";

const $wrapper = $("#dolanan-tab-view");
let $active = null;

$wrapper.find(".dolanan-tab").each(function (index, tab) {
    $(tab).on(
        "click",
        (function (i) {
            return function () {
                if ($active) $active.hide();

                $active = $wrapper
                    .find(".dolanan-tab-content")
                    .children()
                    .eq(i)
                    .show();
            };
        })(index)
    );

    if (index == $wrapper.data("initial-tab")) $(tab).trigger("click");
});

createIcons({
    icons: {
        ChevronLeft,
        ChevronRight,
    },
    attrs: {
        width: 34,
        height: 34,
        "stroke-width": 1.5,
    },
});
