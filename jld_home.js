"use strict";
let services = [
  "Graphic Design 🎨",
  "Branding 🏷",
  "Impactful Web Design 🌐",
  "Software Development 👨‍💻",
  "Computer Training 🎓",
  "Dynamic Printing 🖨",
];
let i = 0;
let j = 0;
let currentService = "";

const changeServices = () => {
  let welcomeMessage = document.getElementById("welcomeMessage");
  if (j <= currentService.length) {
    welcomeMessage.innerHTML = `Welcome to Our Hub of ${currentService.slice(
      0,
      j++
    )}`;
  } else {
    i = (i + 1) % services.length;
    currentService = services[i];
    j = 0;
  }
};

setInterval(changeServices, 200); // Adjust speed as needed

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document
    .getElementsByClassName("slideshow")[0]
    .getElementsByTagName("img");

  // Hide all images
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Increment index
  slideIndex++;

  // Reset index if it's greater than the number of slides
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  // Show the current slide
  slides[slideIndex - 1].style.display = "block";

  // Change slide every 2 seconds
  setTimeout(showSlides, 2000);
}
