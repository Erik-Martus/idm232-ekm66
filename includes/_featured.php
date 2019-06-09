<!-- Featured Recipes -->
<section id="featured" class="rec_grid">
  <h2>Featured Recipes</h2>
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
        include "includes/_item.php";
      } // End if
    } // End while loop
  ?>
</section>