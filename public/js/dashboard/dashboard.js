document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.getElementById("sidebar");
    const toggleDesktop = document.getElementById("toggleSidebarDesktop");
    const toggleMobile = document.getElementById("toggleSidebarMobile");

    // Desktop: colapsar/expandir
    if (toggleDesktop) {
        toggleDesktop.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");
        });
    }

    // Mobile: mostrar/ocultar sidebar
    if (toggleMobile) {
        toggleMobile.addEventListener("click", () => {
            sidebar.classList.toggle("show");
        });
    }
});
