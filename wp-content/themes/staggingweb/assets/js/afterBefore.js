
//===========================================================================================================
// ============================== after-before-javascript2 ==================================================
//===========================================================================================================

 
// var divisor = document.getElementById("divisor"),
//   handle = document.getElementById("handle"),
//   slider = document.getElementById("slider");

// function moveDivisor() {
//   handle.style.left = slider.value + "%";
//   divisor.style.width = slider.value + "%";
// }

// window.onload = function () {
//   moveDivisor();
// };

function moveDivisor(slider) {
  var handle = slider.parentNode.querySelector(".handle");
  var divisor = slider.parentNode.querySelector(".divisor");

  handle.style.left = slider.value + "%";
  divisor.style.width = slider.value + "%";
}

window.onload = function () {
  var sliders = document.querySelectorAll(".slider");
  for (var i = 0; i < sliders.length; i++) {
    moveDivisor(sliders[i]);
  }
};