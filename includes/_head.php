<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- ------------ CSS ------------ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Typkit Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/qzq6gzd.css">
  <link rel="stylesheet" href="css/main.css">

  <title>Home Chef</title>
</head>
<body>
  <header>
    <a id="logo" href="index.php">
      <object id="hc-logo" data="img/logo.svg" type="image/svg+xml">
        <!-- put in png -->
      </object>
    </a>
    <button id="burger">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <div class="hidden" id="menu">
      <span id="search">
        <object id="search_icon" data="img/icons/search_icon.svg" type="image/svg+xml">
          <!-- put in png -->
        </object>
        <form action="">
          <input type="search" name="search" id="search">
        </form>
      </span>
      <div id="filters"> 
        <button id="filter_trigger" class="red-btn">
          <p>Browse Recipes</p>
        </button>
        <div class="hidden" id="filter_drop">
          <section class="filter_type">
            <h4 class="filter_heading">Main Ingredient</h4>
            <ul class="filter_list">
              <li><a href="#">Beef</a></li>
              <li><a href="#">Chicken</a></li>
              <li><a href="#">Pasta</a></li>
              <li><a href="#">Pork</a></li>
              <li><a href="#">Vegetables</a></li>
            </ul>
          </section>
          <section class="filter_type">
            <h4 class="filter_heading">Cuisine</h4>
            <ul class="filter_list">
              <li><a href="#">American</a></li>
              <li><a href="#">Asian</a></li>
              <li><a href="#">Italian</a></li>
            </ul>
          </section>
          <secion class="filter_type">
            <h4 class="filter_heading">Cook Time</h4>
            <ul class="filter_list">
              <li><a href="#">20 Minutes</a></li>
              <li><a href="#">30 Minutes</a></li>
              <li><a href="#">45 Minutes</a></li>
              <li><a href="#">1 Hour</a></li>
            </ul>
          </secion>
          <section class="filter_type">
            <h4 class="filter_heading">Servings</h4>
            <ul class="filter_list">
              <li><a href="#">1 Serving</a></li>
              <li><a href="#">2 Servings</a></li>
              <li><a href="#">4 Servings</a></li>
            </ul>
          </section>
        </div>
      </div>
      <nav>
        <a href="#" class="nav_link red-btn">All Recipes</a>
        <a href="about.php" class="nav_link red-btn">About Us</a>
        <a href="contact.php" class="nav_link red-btn">Contact Us</a>
      </nav>
    </div>
  </header>
