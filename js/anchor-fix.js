// This script is required due to Chromium's dogshit and random ability to jump to anchors when reloading pages.

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash) {
        const eAnchor = document.querySelector(window.location.hash);
        if (eAnchor) {
            eAnchor.scrollIntoView();
        }
    }
});
