document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.getElementById("sidebar");
  const toggleDesktop = document.getElementById("toggleSidebarDesktop");
  const toggleMobile  = document.getElementById("toggleSidebarMobile");

  // Desktop: colapsar/expandir ancho
  if (toggleDesktop) {
    toggleDesktop.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
    });
  }

  // Móvil: mostrar/ocultar fuera de pantalla
  if (toggleMobile) {
    toggleMobile.addEventListener("click", () => {
      sidebar.classList.toggle("show");
    });
  }
});
