var hamburger = document.querySelector(".hamburger")
var navmenu = document.querySelector(".navmneu")

hamburger.addEventListener("click", openmenu);

function openmenu() {
    navmenu.classList.toggle("navopen");
}

gsap.from(".introvideo", {
    scrollTrigger: ".introvideo",
    scale: .5,
    duration: 3
});

gsap.from(".circle3 .setcount", {
    opacity: 0,
    delay: 4
});

gsap.from(".circle2 .setcount", {
    opacity: 0,
    delay: 5
});

gsap.from(".circle4 .setcount", {
    opacity: 0,
    delay: 10
});

gsap.to(".ltastr", {
    scrollTrigger: {
        trigger: ".ltastr",
        scrub: 3,
        start: "top top",
        end: "bottom 200px",
    },
    yPercent: 75,
    ease: "none"
});

const boxes = document.querySelectorAll(".leftIdcr");

var action = gsap.timeline({
    defaults: { duration: 1, ease: 'none' },
    scrollTrigger: {
        trigger: ".prtopics",
        scrub: 0.3,
        start: "top 200px",
        end: "bottom 300px",
    }
})
    .from(boxes, { autoAlpha: 0, stagger: 3 })

var swiper = new Swiper(".revSwiper", {
    spaceBetween: 0,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const videoContainer = document.getElementById('video-container');
const video = document.getElementById('video');
const playPauseButton = document.getElementById('play-pause-button');

videoContainer?.addEventListener('mouseenter', () => {
    playPauseButton.style.display = 'grid';
});

videoContainer?.addEventListener('mousemove', (e) => {
    const x = e.clientX - videoContainer.getBoundingClientRect().left - 25;
    const y = e.clientY - videoContainer.getBoundingClientRect().top - 35;
    playPauseButton.style.left = `${x}px`;
    playPauseButton.style.top = `${y}px`;
});

videoContainer?.addEventListener('mouseleave', () => {
    playPauseButton.style.display = 'none';
});

playPauseButton?.addEventListener('click', () => {
    if (video.paused) {
        video.play();
        playPauseButton.innerHTML = '<i class="fi fi-rr-pause"></i>';
    } else {
        video.pause();
        playPauseButton.innerHTML = '<i class="fi fi-rr-play"></i>';
    }
});

// video button movement 


gsap.from(".innerrocket", {
    scrollTrigger: {
        trigger: ".innerrocket",
        scrub: 3,
        start: "500px bottom",
        end: "bottom top"
    },

    xPercent: -800,
    y: -500,
    transformOrigin: "left right",
    ease: "none"
});

// client logo amimation 

gsap.from(".l_box img", {
    scrollTrigger: ".l_box img",
    y: -50,
    duration: 3,
    scrub: 1
});



var swiper = new Swiper(".logoswiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    loop: true,
});


var swiper = new Swiper(".projsec", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
});