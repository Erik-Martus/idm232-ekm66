<?php
function redirect_to($location = NULL) {
  if ($location != NULL) {
    header("Location:{$location}");
    exit;
  }
}

function randomNumber($min, $max, $quantity) {
  $numbers = range($min, $max);
  shuffle($numbers);
  return array_slice($numbers, 0, $quantity);
}

function safeURL($page, $param) {
  $url = rawurldecode($page);
  $url .= "?";
  if (!is_numeric($param)) {
    $url .= urldecode($param);
  } else if (is_numeric($param)) {
    $url .= $param;
  }

  return $url;
}
?>