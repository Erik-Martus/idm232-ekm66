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

<?php
  $random_id = randomNumber(0, 40, 6);
  $random_id = join(', ', $random_id);
  print_r($random_id);

  $query_info = "SELECT id, title ";
  $query_info .= "FROM rec_info ";
  $query_info .= "WHERE id IN ('$random_id')";
  // $query_info .= "WHERE id = 1";

  $result_info = mysqli_query($connection, $query_info);

  if (!$result_info) {
    die("Database connection failed.");
  }

  $recipe_name = mysqli_fetch_assoc($result_info);
  print_r($recipe_name);

  foreach ($recipe_name as $recipe_name) {
    echo "Recipe Name: {$recipe_name}<br>";
  }

  // while ($recipe = mysqli_fetch_assoc($result_info)) {
  //   echo $recipe["title"];
  //   $recipe++;
  // }
?>