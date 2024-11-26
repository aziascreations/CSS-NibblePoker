let isSidebarVisible = true;

document.addEventListener("DOMContentLoaded", () => {
    const eSidebar = document.getElementById("sidebar");
    const eMain = document.getElementById("main");

    // TODO: Emit an event to help Splide re-align after the sidebar has changed state.
    document.getElementById("sidebar-toggle-footer").onclick = function() {
        if(isSidebarVisible) {
            eSidebar.classList.add("retracted");
            eMain.classList.add("expanded");
        } else {
            eSidebar.classList.remove("retracted");
            eMain.classList.remove("expanded");
        }
        isSidebarVisible = !isSidebarVisible;
    };
});
