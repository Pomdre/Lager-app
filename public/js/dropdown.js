const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(dropdown => {
    dropdown.addEventListener("event", () => {
    dropdown.querySelector('.element').classList.toggle('show');
  });
});