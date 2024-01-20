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
const changeServices = () => {
  document.getElementById(
    "welcomeMessage"
  ).innerHTML = `Welcome to Our Hub of ${services[i]}`;
  i = (i + 1) % services.length;
};
setInterval(changeServices, 2000);
