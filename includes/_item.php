<div class="recipe">
  <img
    srcset="
      img/recipes/<?php echo $recipe["id"] ?>/thumb_lg.jpg 310w,
      img/recipes/<?php echo $recipe["id"] ?>/thumb_sm.jpg 128w"
    sizes="
      (min-width: 64rem) 21rem,
      8rem"
    src="img/recipes/<?php echo $recipe["id"] ?>/thumb_lg.jpg 310w"
    alt="<?php echo $recipe["title"] ?>"
    class="rec_img" />
  <h4 class="rec_title"><?php echo $recipe["title"] ?></h4>
  <a href="<?php 
    $rec_url = rawurldecode("recipe.php");
    $rec_url .= "?" . "id=" . urldecode($recipe["id"]);
    echo htmlspecialchars($rec_url); ?>" 
  class="red-btn rec-btn">Get Cooking</a>
</div>




