<?php
  require "includes/_head.php";
?>

  <main>
    <h1>Chicken</h1>
    <form action="">
      <input type="search" name="search_again" id="search_again" placeholder="Refine your search">
    </form>
    <div id="search_results">
      <div class="recipe">
          <img class="rec_img" src="img/recipes/01/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg" alt="Ancho-Orange Chicken">
          <h4 class="rec_title">Ancho-Orange Chicken</h4>
          <h5 class="rec_subtitle">with Kale, Rice & Roasted Carrots</h5>
          <p class="rec_desc">Weʼre amping up chicken breasts with a glaze of smoky...</p>
          <a class="red-btn rec-btn" href="#">Get Cooking</a>
      </div>
      <div class="recipe">
        <img class="rec_img" src="img/recipes/09/0101_2PRE07_General-Tsos-Chicken_97217_WEB_SQ_hi_res.jpg" alt="General Tso's Chicken">
        <h4 class="rec_title">General Tso's Chicken</h4>
        <h5 class="rec_subtitle">with Bok Choy & Jasmine Rice</h5>
        <p class="rec_desc">In this quick-cooking spin on a takeout favorite, hoisin sauce...</p>
        <a class="red-btn rec-btn" href="#">Get Cooking</a>
      </div>

      <div class="recipe">
        <img class="rec_img" src="img/recipes/15/0108_FPP_Baked-Parmesan-Chicken_98333_WEB_Center_hi_res.jpg" alt="Parmesan-Crusted Chicken">
        <h4 class="rec_title">Parmesan-Crusted Chicken</h4>
        <h5 class="rec_subtitle">with Mashed Sweet Potatoes & Roasted Broccoli</h5>
        <p class="rec_desc">In this simple, seasonal recipe, youʼll coat chicken in a...</p>
        <a class="red-btn rec-btn" href="#">Get Cooking</a>
      </div>
    </div>
  </main>

<?php
  require "includes/_footer.php";
?>