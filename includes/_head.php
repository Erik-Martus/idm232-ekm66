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
    <div id="menu">
      <span id="search">
        <object id="search_icon" data="img/icons/search_icon.svg" type="image/svg+xml">
          <!-- put in png -->
        </object>
        <form action="">
          <input type="search" name="search" id="search">
        </form>
      </span>
      <nav>
        <div id="filters">
          <button id="filter_trigger">
            <p>Browse Recipes</p>
          </button>
          <div id="filter_drop">
            <section class="filterType">
              <h4>Main Ingredient</h4>
              <ul>
                <li><a href="#">Beef</a></li>
                <li><a href="#">Chicken</a></li>
                <li><a href="#">Pasta</a></li>
                <li><a href="#">Pork</a></li>
                <li><a href="#">Vegetables</a></li>
              </ul>
            </section>
            <section class="filterType">
              <h4>Cuisine</h4>
              <ul>
                <li><a href="#">American</a></li>
                <li><a href="#">Asian</a></li>
                <li><a href="#">Italian</a></li>
              </ul>
            </section>
            <secion class="filterType">
              <h4>Cook Time</h4>
              <ul>
                <li><a href="#">20 Minutes</a></li>
                <li><a href="#">30 Minutes</a></li>
                <li><a href="#">45 Minutes</a></li>
                <li><a href="#">1 Hour</a></li>
              </ul>
            </secion>
            <section class="filterType">
              <h4>Servings</h4>
              <ul>
                <li><a href="#">1 Serving</a></li>
                <li><a href="#">2 Servings</a></li>
                <li><a href="#">4 Servings</a></li>
              </ul>
            </section>
          </div>
        </div>
        <a href="#" class="navLink">All Recipes</a>
        <a href="about.php" class="navLink">About Us</a>
        <a href="contact.php" class="navLink">Contact Us</a>
      </nav>
    </div>
  </header>
