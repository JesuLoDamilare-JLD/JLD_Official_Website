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
