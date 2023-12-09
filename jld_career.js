let descriptions = {
  "ICT Technician": "Job description for ICT Technician",
  "Graphic Designer": "Job description for Graphic Designer",
};

const showDescription = () => {
  let role = document.getElementById("jobRoles").value;
  if (role) {
    document.getElementById("jobDescription").innerHTML = descriptions[role];
  } else {
    document.getElementById("jobDescription").innerHTML = "";
  }
};
