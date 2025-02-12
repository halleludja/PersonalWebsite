function toggleMenu() {
  const nav = document.querySelector(".nav-list");
  nav.classList.toggle("active");
}

document.getElementById("hamburger-menu").addEventListener("click", toggleMenu);