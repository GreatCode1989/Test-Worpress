
document.addEventListener("DOMContentLoaded", function () {
  var gridItems = document.querySelectorAll(".grid-item");
  var popup = document.getElementById("popup");
  var exitButton = document.querySelector(".exit"); 
  
  gridItems.forEach(function (item) {
    item.addEventListener("click", function () {
      popup.style.display = "block"; 
    });
  });

  exitButton.addEventListener("click", function () {
    popup.style.display = "none"; 
  });

  popup.addEventListener("click", function (event) {
    if (event.target === popup) {
      popup.style.display = "none"; 
    }
  });
});
