let fadeTarget = document.querySelector(".loading");
function show_loading() {
    fadeTarget.style.display = "block";
    fadeTarget.style.opacity = 1;
}
function hide_loading() {
    // fadeTarget.style.display = "none";
    let fadeEffect = setInterval(() => {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
            fadeTarget.style.display = "none";
        }
    }, 100);
}

// var swiper = new Swiper(".team .team-slide", {
//     loop: true,
//     direction: "vertical",
//     effect: "coverflow",
//     grabCursor: true,
//     centeredSlides: true,
//     slidesPerView: "auto",
//     coverflowEffect: {
//         rotate: 0,
//         stretch: 0,
//         depth: 0,
//         modifier: 1,
//         slideShadows: true,
//     },
// });
