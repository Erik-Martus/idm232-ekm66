<!-- Featured Recipes -->
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
            <a href="<?php 
              $rec_url = rawurldecode("recipe.php");
              $rec_url .= "?" . "id=" . urldecode($recipe["id"]);

              echo htmlspecialchars($rec_url);
            ?>" class="red-btn rec-btn">Get Cooking</a>
          </div>
        <?php
      } // End if
    } // End while loop
  ?>
</section>