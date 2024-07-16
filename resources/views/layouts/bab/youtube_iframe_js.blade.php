<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    const tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";

    const firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    let player;
    const container = document.getElementById("ytplayer");

    function getVideoId(url) {
        // https://www.youtube.com/watch?v=Q9-8-UXI0AY&list=PL9vSw_ntpfTLbQG2q-o2Y96Wto5PE-Tiy&index=17
        // https://youtu.be/J568rft2Wco?feature=shared
        const matches = url.match(/\?v=([^&]+)|embed\/([^\/\?]+)|youtu\.be\/([^\?]+)/);

        if (matches[1]) return matches[1];
        if (matches[2]) return matches[2];
        if (matches[3]) return matches[3];

        return null;
    }

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('ytplayer', {
            height: container.style.height,
            width: container.style.width,
            videoId: getVideoId(container.dataset.url),
            playerVars: {
                'playsinline': 1
            },
            events: {
                // 'onReady': onPlayerReady,
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }
</script>
