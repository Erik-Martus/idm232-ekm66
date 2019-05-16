<?php
  require "includes/_head.php";
?>

<main>
  <section id="hero">
    <a id="hero_img" href="recipeTemplate.php">
      <img src="img/recipes/01/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg" alt="Ancho-Orange Chicken">
      <h3>Ancho-Orange Chicken</h3>
    </a>
    <h5 class="rec_subtitle">with Kale, Rice & Roasted Carrots</h5>
    <a class="red-btn rec-btn" href="recipeTemplate.php">Get Cooking</a>
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
    <a href="about.php" class="nav_link red-btn">Learn More</a>
  </section>

  <!-- Featured Recipes -->
  <secion id="featured">
    <h2>Featured Meals</h2>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/02/0101_2PM_Steak-Diane_97315_SQ_hi_res.jpg" alt="Beef Medallions & Mushroom Sauce">
      <h4 class="rec_title">Beef Medallions & Mushroom Sauce</h4>
      <h5 class="rec_subtitle">with Mashed Potatoes</h5>
      <p class="rec_desc">In this easy recipe, inspired by steak Diane (an American...</p>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/03/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
      <h4 class="rec_title">Broccoli & Basil Pesto Sandwiches</h4>
      <h5 class="rec_subtitle">with Romaine & Citrus Salad</h5>
      <p class="rec_desc">These Italian focaccia sandwiches are layered with...</p>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
  </secion>
</main>

<?php
  require "includes/_footer.php";
?>