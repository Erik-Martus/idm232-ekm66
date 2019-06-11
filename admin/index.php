<?php
  require_once "../includes/_global.php";

  $title .= " | Admin";

  require_once "includes/_head.php";
?>
<main>
  <h2>Edit a Recipe</h2>
</main>

<?php
  $query = "SELECT `id`, `title` ";
  $query .= "FROM `recipes` ";
  $query .= "ORDER by id ASC";

  $result = mysqli_query($connection, $query);
  
      if (!$result) {
        die("Database connection failed.");
      }
      
      while($recipe = mysqli_fetch_assoc($result)) {
        echo $recipe["title"];
      } // End while loop
?>

<?php
  require_once "includes/_footer.php";
?>