var filter_tog = document.getElementById("filter_toggle");
var filter_opt = document.getElementById("filter_options");

function opt_tog() {

}

filter_tog.addEventListener("click", () => {
  if (filter_opt.classList.contains("collapse")) {
    filter_opt.classList.remove("collapse");
  } else {
    filter_opt.classList.add("collapse");
  }
}, false)