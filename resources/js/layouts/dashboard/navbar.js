// When the user scrolls down 100px from the top of the document,
// resize the navbar's padding and the logo's font size
window.onscroll = function () {
    const nav = document.querySelector(".app-nav");
    const scrollTop = document.body.scrollTop
        ? document.body.scrollTop
        : document.documentElement.scrollTop;

    if (scrollTop > 100) {
        if (nav.dataset.shrink) return;

        nav.style.backgroundColor = "#FFE4C4";
        nav.querySelector(".logo").style.width = "3rem";
        nav.dataset.shrink = true;
    } else {
        if (!nav.dataset.shrink) return;

        nav.style.backgroundColor = "transparent";
        nav.querySelector(".logo").style.width = "6rem";
        delete nav.dataset.shrink;
    }
};
