<?php require "includes/_head.php"; ?>

<main>
  <section id="all_rec" class="rec_grid">
    <h2>Browse all Recipes</h2>
    <?php
      $query = "SELECT id, title, hero_image ";
      $query .= "FROM recipes ";
      $query .= "ORDER by id ASC";
  
      $result = mysqli_query($connection, $query);
  
      if (!$result) {
        die("Database connection failed.");
      }
      
      while($recipe = mysqli_fetch_assoc($result)) {
        include "includes/_item.php";
      } // End while loop
    ?>
  </section>
</main>

<?php require "includes/_footer.php"; ?>