import { createIcons, Volume2, Pause } from "lucide";
import { Howl } from "howler";

createIcons({
    icons: {
        Volume2,
        Pause,
    },
});

const playlist = {};
let sound = null;
let $track = null;
let $icon = null;

const step = function () {
    // Determine our current seek position.
    let seek = sound.seek() || 0;
    $track.css({ width: ((seek / sound.duration()) * 100 || 0) + "%" });

    // If the sound is still playing, continue stepping.
    if (sound.playing()) {
        requestAnimationFrame(step);
    }
};

const init = function (url) {
    return new Howl({
        src: [url],
        html5: true, // Force to HTML5 so that the audio can stream in (best for large files).
        onplay: function () {
            // Start updating the progress of the track.
            requestAnimationFrame(step);

            // Start the wave animation if we have already loaded
            $icon.find(".play").hide();
            $icon.find(".pause").show();
        },
        onend: function () {
            $track.css({ width: 0 });
            $icon.find(".play").show();
            $icon.find(".pause").hide();
        },
        onstop: function () {
            $track.css({ width: 0 });
            $icon.find(".play").show();
            $icon.find(".pause").hide();
        },
    });
};

$(".play-btn").on("click", function () {
    const $btn = $(this);
    const url = $btn.data("audio");

    if (sound && sound.playing()) {
        sound.stop();
        return;
    }

    if (!playlist[url]) {
        playlist[url] = init(url);
    }

    $icon = $btn.find(".icon");
    $track = $btn.find(".track");
    sound = playlist[url];
    sound.play();
});
