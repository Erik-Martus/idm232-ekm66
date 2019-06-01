<!-- Featured Recipes -->
  <!-- <section id="featured">
    <h2>Featured Meals</h2>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/02/0101_2PM_Steak-Diane_97315_SQ_hi_res.jpg" alt="Beef Medallions & Mushroom Sauce">
      <h4 class="rec_title">Beef Medallions & Mushroom Sauce</h4>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/03/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
      <h4 class="rec_title">Broccoli & Basil Pesto Sandwiches</h4>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/03/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
      <h4 class="rec_title">Broccoli & Basil Pesto Sandwiches</h4>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/03/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
      <h4 class="rec_title">Broccoli & Basil Pesto Sandwiches</h4>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/03/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
      <h4 class="rec_title">Broccoli & Basil Pesto Sandwiches</h4>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
    <div class="recipe">
      <img class="rec_img" src="img/recipes/03/1225_FPV_Pesto_-Broccoli-Sandwich_74916_WEB_SQ_hi_res.jpg" alt="Brocolli and Basil Pesto Sandwhiches">
      <h4 class="rec_title">Broccoli & Basil Pesto Sandwiches</h4>
      <a class="red-btn rec-btn" href="#">Get Cooking</a>
    </div>
  </section> -->

<section id="featured">
  <?php
    $query = "SELECT id, title, hero_image ";
    $query .= "FROM recipes ";
    $query .= "ORDER by id ASC";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Database connection failed.");
    }

    $random_id = randomNumber(1, 40, 6);

    while($recipe = mysqli_fetch_assoc($result)) {
      if (in_array($recipe["id"], $random_id)) {
        ?>
          <div class="recipe">
            <img
              src="img/recipes/<?php echo $recipe["id"] . "/" . $recipe["hero_image"] ?>"
              alt="<?php echo $recipe["title"] ?>" class="rec_img"
            >
            <h4 class="rec_title"><?php echo $recipe["title"] ?></h4>
            <a href="<?php echo safeURL("recipe.php", $recipe["id"]) ?>" class="red-btn rec-btn">Get Cooking</a>
          </div>
        <?php
      } // End if
    } // End while loop
  ?>
</section>