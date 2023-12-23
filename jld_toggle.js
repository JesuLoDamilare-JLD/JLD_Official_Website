const toggleButton = document.getElementsByClassName("toggle-button")[0];
const navListItems = document.querySelectorAll(".navdiv ul li");

toggleButton.addEventListener("click", () => {
  // Check if the viewport is below 375px (as defined in your media query)
  if (window.innerWidth <= 768) {
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
