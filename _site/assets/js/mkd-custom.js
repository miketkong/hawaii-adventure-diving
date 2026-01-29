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
});