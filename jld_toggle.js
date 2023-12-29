const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navListItems = document.querySelectorAll(".navdiv ul li");

toggleButton.addEventListener("click", () => {
  // Check if the viewport is below 375px (as defined in your media query)
  if (window.innerWidth <= 1024) {
    // Toggle the display property for each list item
    navListItems.forEach((item) => {
      if (item.style.display === "none" || item.style.display === "") {
        item.style.display = "block";
      } else {
        item.style.display = "none";
      }
    });
  }
});

let currentSlide = 0;
const slides = document.querySelectorAll(".team > div");
slides[currentSlide].style.display = "block";

document.getElementById("prev").addEventListener("click", () => {
  slides[currentSlide].style.display = "none";
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  slides[currentSlide].style.display = "block";
});

document.getElementById("next").addEventListener("click", () => {
  slides[currentSlide].style.display = "none";
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].style.display = "block";
});
