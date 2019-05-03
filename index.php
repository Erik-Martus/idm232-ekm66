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

  <title>Home Chef</title>
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
    <section id="hero">
      <a href="recipeTemplate.php"><img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg" alt="Ancho-Orange Chicken"></a>
      <h3>Ancho-Orange Chicken</h3>
      <h5 class="subtitle">with Kale, Rice & Roasted Carrots</h5>
      <a href="recipeTemplate.php">Get Cooking</a>
    </section>

    <!-- Mission Statement -->
    <section id="mission">
      <h2>Our Mission</h2>
      <h3>Delicious Food</h3>
      <p>Everyone deserves to eat delicious food, whether it be out with friends and family or in the comfort of their own home.</p>
      <h3>Easy to Make Meals</h3>
      <p>Cooking isn't difficult, everyone can do it (yes, even you). Our recipes come with step-by-step instructions that guide you from raw ingredients through finished meal.</p>
      <h3>Perfection Every Time</h3>
      <p>With our help you will be able to prepare delicious food at home and achieve perfection every time. Satisfaction guaranteed.</p>
      <a href="about.php" class="button">Learn More</a>
    </section>

    <!-- Featured Recipes -->
    <secion id="featured">
      <h2>Featured Meals</h2>
      <div class="meal">
        <img src="img/recipes/beef_medallions_and_mushroom_sauce/0101_2PM_Steak-Diane_97315_SQ_hi_res.jpg" alt="Beef Medallions & Mushroom Sauce">
        <h4>Beef Medallions & Mushroom Sauce</h4>
        <h5 class="subtitle">with Mashed Potatoes</h5>
        <p>In this easy recipe, inspired by steak Diane (an American...</p>
        <a href="#">Get Cooking</a>
      </div>
      <div class="meal">
        <img src="img/recipes/brocolli_and_basil_pesto_sandwhiches/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
        <h4>Broccoli & Basil Pesto Sandwiches</h4>
        <h5 class="subtitle">with Romaine & Citrus Salad</h5>
        <p>These Italian focaccia sandwiches are layered with broccoli, three cheeses...</p>
        <a href="#">Get Cooking</a>
      </div>
    </secion>
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