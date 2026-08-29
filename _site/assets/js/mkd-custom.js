document.addEventListener('DOMContentLoaded', (event) => {

    const scrollingBlackFade = document.getElementById('scrollingBlackFade');

    const adjustOpacity = () => {
        let scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
        let scrolled = window.scrollY / scrollHeight;

        //console.log("adjusting opacity");

        // Calculate the new opacity
        let newOpacity = Math.min(0.6, scrolled * (0.6 * 3)); // 0.4 is the target opacity at 3 page heights

        console.log(newOpacity);

        scrollingBlackFade.style.backgroundColor = `rgba(0, 0, 0, ${newOpacity})`; // Adjust RGB values as needed
    };

    //window.addEventListener('scroll', adjustOpacity);

    const fixedButton = document.getElementById('fixed-button');
    if (fixedButton) {
        fixedButton.href = 'https://fareharbor.com/embeds/book/h2oadventureshawaii/items/3485/calendar/';
    }
});

function rotateText(selector, textArray) {
    console.log("log: In rotateText function");

    let tickerText = document.querySelector(selector);

    // Set initial opacity to 0
    tickerText.animate([
        { opacity: 0 }
    ], {
        duration: 0,
        fill: 'forwards'
    });

    tickerText.style.transition = 'opacity 1s ease';

    var current = Math.floor(Math.random() * textArray.length);
    var next;

    tickerText.innerHTML = textArray[current];


    function initialFadeIn() {
        setTimeout(function () {
            tickerText.animate([
                { opacity: 1 }
            ], {
                duration: 1000,
                fill: 'forwards'
            });
            hold();
        }, 1000);
    }

    function hold() {
        console.log("log: holding");
        setTimeout(fadeOut, 3000);
    }

    function fadeOut() {
        tickerText.animate([
            { opacity: 0 }
        ], {
            duration: 1000,
            fill: 'forwards'
        });
        setTimeout(cycle, 1000);
    };

    function cycle() {
        do { next = Math.floor(Math.random() * textArray.length); } while (next === current);
        current = next;
        tickerText.innerHTML = textArray[current];
        setTimeout(fadeIn, 100);
    };


    function fadeIn() {
        tickerText.animate([
            { opacity: 1 }
        ], {
            duration: 1000,
            fill: 'forwards'
        });

        setTimeout(hold, 2000);
    };

    initialFadeIn();
};

/* Text Effects */

function typewriterEffect(element, delayPerChar = 60) {
    const text = element.textContent;
    element.style.opacity = '1';
    element.innerHTML = text
        .split('')
        .map((char, i) => {
            const content = char === ' ' ? '&nbsp;' : char;
            return `<span class="char" style="animation-delay:${i * delayPerChar}ms">${content}</span>`;
        })
        .join('');
}

/*
document.addEventListener('DOMContentLoaded', function () {
    const heroVideo = document.getElementById('hero-video');
    console.log("log: heroVideo element:", heroVideo);
    if (heroVideo) {
        console.log("log: Adding event listener for 'playing' event on heroVideo");
        heroVideo.addEventListener('playing', function () {
            console.log("Video is playing!");
            //document.querySelectorAll('.typewriter').forEach(el => typewriterEffect(el));
        }, { once: true });
    }
}); */