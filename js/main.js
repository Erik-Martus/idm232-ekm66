// ! Menu Toggle
var burger = document.getElementById("burger"); // Hamburger icon
var menu = document.getElementById("menu"); // Drop down
var viewport = window.innerWidth || document.documentElement.clientWidth;

burger.addEventListener('mousedown', function () {
  if (menu.classList.contains("menu_hidden")) {
    menu.classList.remove("menu_hidden");
  } else {
    menu.classList.add("menu_hidden");
  }
}, false);

window.addEventListener('resize', function () {
  if (viewport > 1024) {
    console.log('Desktop');
  } else {
    console.log('tablet');
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