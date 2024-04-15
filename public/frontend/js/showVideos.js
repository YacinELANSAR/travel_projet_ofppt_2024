function showVideoPopup(videoSrc) {
    var videoModal = document.getElementById('videoModal');
    var videoPlayer = document.getElementById('videoPlayer');

    videoPlayer.src = videoSrc;
    videoModal.style.display = 'block';
}

function closeVideoPopup() {
    var videoModal = document.getElementById('videoModal');
    var videoPlayer = document.getElementById('videoPlayer');
    
    videoPlayer.pause();
    videoModal.style.display = 'none';
}