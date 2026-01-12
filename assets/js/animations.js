document.addEventListener("DOMContentLoaded", () => {
  document.body.classList.add("page-loaded");

  window.addEventListener("scroll", () => {
    document.body.classList.toggle("header-scrolled", window.scrollY > 40);
  });
});
