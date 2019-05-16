// ! Menu Toggle
var burger = document.getElementById("burger"); // Hamburger icon
var menu = document.getElementById("menu"); // Drop down

burger.addEventListener('mousedown', function () {
  if (menu.classList.contains("hidden")) {
    menu.classList.remove("hidden");
  } else {
    menu.classList.add("hidden");
  }
}, false);

// ! Filter Toggle
var toggle = document.getElementById("filter_trigger"); // Browse Recipes button
var filters = document.getElementById("filter_drop"); // filter option container

toggle.addEventListener('mousedown', function () {
  if (filters.classList.contains("hidden")) {
    filters.classList.remove("hidden");
  } else {
    filters.classList.add("hidden");
  }
}, false);

// ! Recipe Image Toggle
// This does not work yet, it will be revisited later.
var img_on = document.getElementById("toggle-on"); // "On" Radio button
var img_off = document.getElementById("toggle-off"); // "Off" Radio button
var rec_steps = document.getElementById("dir_list"); // step by step directions
var step_img = document.getElementsByClassName("step_img");
console.log("TCL: step_img", step_img)

img_on.addEventListener('mousedown', function () {
  if (step_img.classList.contains("hidden") = true) {
    // step_img.classList.remove("hidden");
    console.log('True')
  }
}, false);

img_off.addEventListener('mousedown', function () {
  step_img.classList.add("hidden");
  console.log('show')
}, false);