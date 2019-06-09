<div class="recipe">
  <img
    src="img/recipes/<?php echo $recipe["id"] . "/" . $recipe["hero_image"] ?>"
    alt="<?php echo $recipe["title"] ?>" class="rec_img"
  >
  <h4 class="rec_title"><?php echo $recipe["title"] ?></h4>
  <a href="<?php 
    $rec_url = rawurldecode("recipe.php");
    $rec_url .= "?" . "id=" . urldecode($recipe["id"]);
    echo htmlspecialchars($rec_url); ?>" 
  class="red-btn rec-btn">Get Cooking</a>
</div>