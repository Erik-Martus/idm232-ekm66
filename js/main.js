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