let rotateCount = 0;
const clickBurger = () => {
  if (rotateCount % 2 == 0) {
    document.getElementById("cancelNavbar").style.display = "flex";
    document.getElementById("cancelNavbar").style.justifyContent = "center";
    document.getElementById("cancelNavbar").style.alignItems = "center";
    document.getElementsByClassName("navbar-toggler-icon")[0].style.display =
      "none";
  } else {
    document.getElementById("cancelNavbar").style.display = "none";
    document.getElementsByClassName("navbar-toggler-icon")[0].style.display =
      "block";
  }
  rotateCount++;
};
