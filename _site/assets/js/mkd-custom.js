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

/* =========================================================
   CUSTOM: Lightbox (MagnificPopup) arrow positioning
   Repositions the prev/next arrows so they sit just outside
   the left/right edges of the displayed image, instead of
   pinned to the viewport edges (MagnificPopup's default).
   ========================================================= */
(function () {
    var ARROW_WIDTH = 90; // matches .mfp-arrow width in magnific-popup.css
    var EDGE_GAP = 0;    // space between image edge and arrow

    function positionLightboxArrows() {
        var content = document.querySelector('.mfp-content');
        var arrowLeft = document.querySelector('.mfp-arrow-left');
        var arrowRight = document.querySelector('.mfp-arrow-right');

        if (!content || !arrowLeft || !arrowRight) {
            return;
        }

        var rect = content.getBoundingClientRect();

        var leftPx = Math.max(0, rect.left - EDGE_GAP - ARROW_WIDTH);
        var rightPx = Math.max(0, window.innerWidth - ARROW_WIDTH - EDGE_GAP - rect.right);

        arrowLeft.style.left = leftPx + 'px';
        arrowRight.style.right = rightPx + 'px';
    }

    // Fires whenever MagnificPopup swaps in a new <img class="mfp-img">
    // (initial open, and every next()/prev() navigation). Deferred with
    // setTimeout so MagnificPopup's own load handler runs first and
    // removes the "mfp-loading" class that hides .mfp-figure - otherwise
    // .mfp-content is measured while still collapsed to its loading size.
    document.addEventListener('load', function (e) {
        if (e.target && e.target.classList && e.target.classList.contains('mfp-img')) {
            setTimeout(positionLightboxArrows, 0);
        }
    }, true);

    window.addEventListener('resize', positionLightboxArrows);
})();