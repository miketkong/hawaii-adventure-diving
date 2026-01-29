<!-- Snorkel Video Banner -->
<div id="banner-video-bgd" class="video-container">
    <div id="player"></div>

    <script>
        if (window.innerWidth > 576) {
            console.log("Window width greater than 576");
            mobile = false;
            youtubeVideoID = "843Rpqza_6o";
            //youtubeVideoID = "S3DXviMrdVk"; // Test Video

        } else {
            console.log("Window width less than 576");
            mobile = true;
            youtubeVideoID = "843Rpqza_6o";
            //youtubeVideoID = "ENjo2i5nsP0"; // Test Video

        }

        console.log(youtubeVideoID);

        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player;
        var bannerVideoOverlay = document.getElementById("banner-video-overlay");

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: youtubeVideoID,
                playerVars: {
                    'loop': 1,
                    'start': 600,
                    'playlist': youtubeVideoID,
                    'playsinline': 1,
                    'autoplay': 1,
                    'controls': 0,
                    'mute': 1
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        function onPlayerReady(event) {
            event.target.playVideo();
        }
        var doneLoading = false;

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !doneLoading) {
                doneLoading = true;
                fadeOutVideoOverlay();
            }
        }

        function fadeOutVideoOverlay() {
            bannerVideoOverlay.classList.add("fade-out");
        }
    </script>
</div>
<!--// Snorkel Video Banner -->