<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Chef</title>
</head>
<body>
  <header>
    <a href="index.php"><img src="img/logo.svg" alt="Home Chef Logo"></a>
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
    </nav>
  </header>

  <main>
    <section id="hero">
      <a href="recipeTemplate.php"><img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg" alt="Ancho-Orange Chicken"></a>
      <h3>Ancho-Orange Chicken</h3>
      <p>Weʼre amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.</p>
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
      <a href="about.php">Learn More</a>
    </section>

    <!-- Featured Recipes -->
    <secion id="featured">
      <h2>Featured Meals</h2>
    </secion>
  </main>

  <footer>
  </footer>
</body>
</html>