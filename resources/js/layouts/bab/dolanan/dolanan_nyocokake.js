import { SVG } from "@svgdotjs/svg.js";

const screenSize = screen.width;
const imageW = screenSize <= 480 ? 100 : 230;
const imageH = screenSize <= 480 ? 100 : 150;
const gap = screenSize <= 480 ? 5 : 25;
const hookColor = "#f06";
const hookActiveColor = "#007aff";
const lineHoverColor = "#FF4040";
const $svg = SVG("svg");
const $left = $svg.find(".left");
const $right = $svg.find(".right");
const lines = {};
let lineId = 0;
let hookStart = null;
let hookEnd = null;
let drawing = false;

// tentukan ukuran canvas
$svg.size(imageW * 2 + gap * 10, imageH * $left.length + gap * $left.length);

// tentukan ukuran image
$svg.find("image").size(imageW, imageH);
$svg.find("foreignObject").size(imageW, imageH);

const drawLineBetweenHook = (hookStart, hookEnd) => {
    const $line = $svg
        .line(hookStart.cx(), hookStart.cy(), hookEnd.cx(), hookEnd.cy())
        .attr("lid", lineId)
        .stroke({
            color: hookActiveColor,
            width: 10,
            linecap: "round",
        })
        .on("mouseover", function () {
            this.stroke({ color: lineHoverColor });
        })
        .on("mouseout", function () {
            this.stroke({ color: hookActiveColor });
        })
        .click(function () {
            this.remove();
            hookStart.fill({ color: hookColor }).click(onClickHook);
            hookEnd.fill({ color: hookColor }).click(onClickHook);
            delete lines[this.attr("lid")];
            console.log(lines, this.attr("lid"));
        });

    lines[lineId] = {
        hookStart,
        hookEnd,
        line: $line,
    };

    lineId++;
    return $line;
};

const onClickHook = function () {
    if (drawing) {
        if (hookStart == this) {
            // same hook: abaikan
            this.fill({ color: hookColor });
        } else if (
            hookStart.classes().toString() == this.classes().toString()
        ) {
            // same side: abaikan
            this.fill({ color: hookColor });
            return;
        } else {
            // titik akhir baris
            hookEnd = this;

            // membuat elemen garis
            const $line = drawLineBetweenHook(hookStart, hookEnd);

            // bring to front hook
            this.fill({ color: hookActiveColor }).off("click").front();
            hookStart.off("click").front();
        }
    } else {
        // titik awal garis
        hookStart = this;
        this.fill({ color: hookActiveColor });
    }

    drawing = !drawing;
};

/**
 * buat hook
 * @returns SVGCircleElement
 */
const drawHook = (cy, cx, index) => {
    const radius = 15;
    return $svg
        .circle(radius)
        .attr({ fill: hookColor, idx: index })
        .cy(cy)
        .cx(cx)
        .on("mouseover", function () {
            this.animate({ duration: 100 }).transform({ scale: 1.5 });
        })
        .on("mouseout", function () {
            this.animate({ duration: 100 }).transform({ scale: 1 });
        })
        .click(onClickHook);
};

// tata posisi gambar + draw hook
let y = 0;
$left.each(function ($image, index, list) {
    $image.y(y);
    y += imageH + gap;
    drawHook(
        $image.cy(),
        $image.x() + imageW + gap,
        $image.attr("idx")
    ).addClass("hook-left");
});

y = 0;
$right.each(function ($image, index, list) {
    $image.y(y).x(imageW + gap * 10);
    y += imageH + gap;
    if (screenSize >= 480) {
        drawHook($image.cy(), $image.x() - gap, $image.attr("idx")).addClass(
            "hook-right"
        );
    } else {
        drawHook($image.cy(), $image.x() - gap, $image.attr("idx")).addClass(
            "hook-right"
        );
    }
});

const drawCheck = (cx, cy, color) => {
    return SVG('<path d="M20 6 9 17l-5-5"/>')
        .fill("none")
        .stroke({ color: color, width: 4, linecap: "round" })
        .cx(cx)
        .cy(cy)
        .addTo($svg);
};

const drawX = (cx, cy, color) => {
    const group = $svg.group();
    SVG('<path d="m15 9-6 6"/>')
        .fill("none")
        .stroke({ color: color, width: 2, linecap: "round" })
        .cx(cx)
        .cy(cy)
        .addTo(group);
    SVG('<path d="m9 9 6 6"/>')
        .fill("none")
        .stroke({ color: color, width: 2, linecap: "round" })
        .cx(cx)
        .cy(cy)
        .addTo(group);
    return group;
};

$(".mriksa").on("click", function () {
    const colorSuccess = "#6ddc00";
    const colorError = "#fe4063";

    for (let lid in lines) {
        const $line = lines[lid].line;
        const $hookStart = lines[lid].hookStart;
        const $hookEnd = lines[lid].hookEnd;

        if ($hookStart.attr("idx") == $hookEnd.attr("idx")) {
            drawCheck($hookStart.cx(), $hookStart.cy(), "#000");
            drawCheck($hookEnd.cx(), $hookEnd.cy(), "#000");
            $hookStart.fill(colorSuccess);
            $hookEnd.fill(colorSuccess);
            $line.stroke({ color: colorSuccess });
        } else {
            drawX($hookStart.cx(), $hookStart.cy(), "#fff").transform({
                scale: 2,
            });
            drawX($hookEnd.cx(), $hookEnd.cy(), "#fff").transform({
                scale: 2,
            });
            $hookStart.fill(colorError);
            $hookEnd.fill(colorError);
            $line.stroke({ color: colorError });
        }

        $hookStart.transform({ scale: 2 }).off();
        $hookEnd.transform({ scale: 2 }).off();
        $line.off();
    }
});
