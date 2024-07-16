/**
 * Referensi:
 * https://stackoverflow.com/questions/38682765/jquery-javascript-random-number-animation
 */

const $section = $("#nyanyi-lan-joged");
const $nomer = $section.find(".nomer");
const randomIntFromInterval = (min, max) => {
    // min and max included
    return Math.floor(Math.random() * (max - min + 1) + min);
};

$section.find(".acak-nomer").on("click", function () {
    let timer = null;
    const prev = $nomer.val();
    const duration = 2000;
    const started = new Date().getTime();
    const generate = () => {
        let next = prev;
        while (next == prev) {
            next = randomIntFromInterval(1, 10);
        }
        return next;
    };

    timer = setInterval(function () {
        if (new Date().getTime() - started > duration) {
            clearInterval(timer);
        }
        $nomer.text(generate());
    }, 100);
});
