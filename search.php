<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Typkit Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/qzq6gzd.css">
  <link rel="stylesheet" href="css/main.css">

  <title>Home Chef - Search</title>
</head>
<body>
<header>
    <a href="index.php"><img id="logo" src="img/logo.svg" alt="Home Chef Logo"></a>
    <span id="search"><img src="img/search.svg" alt="Search Icon"></span>
    <form action="">
      <input type="search" name="search" id="search">
    </form>
    <span id="burger">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <nav>
      <button id="filterTrigger">
        <p>Filter</p>
      </button>
      <div id="filters">
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
      <a href="#" class="navLink">All Recipes</a>
      <a href="about.php" class="navLink">About Us</a>
      <a href="contact.php" class="navLink">Contact Us</a>
    </nav>
  </header>

  <main>
    <h1>Chicken</h1>
    <form action="">
      <input type="search" name="searchAgain" id="searchAgain">
    </form>
    <div id="searchResults">
      <div class="result">
        <a href="#" class="resultLink">
          <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg" alt="Ancho-Orange Chicken">
          <h4>Ancho-Orange Chicken</h4>
          <h5 class="subtitle">with Kale, Rice & Roasted Carrots</h5>
          <p>Weʼre amping up chicken breasts with a glaze of smoky...</p>
          <a href="#">Get Cooking</a>
        </a>
      </div>
      <div class="result">
        <a href="#" class="resultLink">
          <img src="img/recipes/general_tsos_chicken/0101_2PRE07_General-Tsos-Chicken_97217_WEB_SQ_hi_res.jpg" alt="General Tso's Chicken">
          <h4>General Tso's Chicken</h4>
          <h5>with Bok Choy & Jasmine Rice</h5>
          <p>In this quick-cooking spin on a takeout favorite, hoisin sauce...</p>
          <a href="#">Get Cooking</a>
        </a>
      </div>
      <div class="result">
        <a href="#" class="resultLink">
          <img src="img/recipes/parmesan-crusted_chicken/0108_FPP_Baked-Parmesan-Chicken_98333_WEB_Center_hi_res.jpg" alt="Parmesan-Crusted Chicken">
          <h4>Parmesan-Crusted Chicken</h4>
          <h5>with Mashed Sweet Potatoes & Roasted Broccoli</h5>
          <p>In this simple, seasonal recipe, youʼll coat chicken in a...</p>
          <a href="#">Get Cooking</a>
        </a>
      </div>
    </div>
  </main>

  <footer>
    <div id="social">
      <h6>Follow Us</h6>
      <img src="img/social/facebook.svg" alt="Facebook Logo">
      <img src="img/social/twitter.svg" alt="Twitter Logo">
      <img src="img/social/instagram.svg" alt="Instagram Logo">
    </div>
    <div id="footerNav">
      <ul>
        <li class="footLink"><a href="index.php">Home</a></li>
        <li class="footLink"><a href="about.php">About Us</a></li>
        <li class="footLink"><a href="contact.php">Contact Us</a></li>
        <li class="footLink"><a href="support.php">Support</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>