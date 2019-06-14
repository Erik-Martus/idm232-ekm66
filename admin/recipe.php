<?php

require_once "../includes/_global.php";
require_once "../includes/_db.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  $safe_id = mysqli_real_escape_string($connection, $id);
}

if (isset($_POST["submit"])) {
  
  $rec_title = mysqli_real_escape_string($connection, $_POST['recTitle']);

  $rec_side = mysqli_real_escape_string($connection, $_POST['recSide']);

  if (isset($_FILES['recHero'])) {
    $rec_hero = $_FILES['recHero']['name'];
    $rec_hero = $rec_hero[0];
    $rec_hero = mysqli_real_escape_string($connection, $rec_hero);
  }

  
  $rec_desc = mysqli_real_escape_string($connection, $_POST['recDesc']);
  $desc_open_tag = substr($rec_desc, 0, 3);
  $desc_close_tag = substr($rec_desc, -1, -4);
  
  if ($desc_open_tag = "<p>") {
    $rec_desc = ltrim($rec_desc, '<p>');
  }
  if ($desc_close_tag = "</p>") {
    echo "true";
  } else {
    $rec_desc = rtrim($rec_desc, '</p>');
  }

  $rec_time = mysqli_real_escape_string($connection, $_POST['recTime']);
  $rec_serv = mysqli_real_escape_string($connection, $_POST['recServ']);
  $rec_nutr = mysqli_real_escape_string($connection, $_POST['recNutr']);

  if (isset($_FILES['recIngImg'])) {
    $rec_ing_img = $_FILES['recIngImg']['name'];
    $rec_ing_img = $rec_ing_img[0];
    $rec_ing_img = mysqli_real_escape_string($connection, $rec_ing_img);
  }
  $rec_tool_title = mysqli_real_escape_string($connection, $_POST['recToolTitle']);
  $rec_tool_desc = mysqli_real_escape_string($connection, $_POST['recToolDesc']);

  if (isset($_FILES['recToolImg'])) {
    $rec_tool_img = $_FILES['recToolImg']['name'];
    $rec_tool_img = $rec_tool_img[0];
    $rec_tool_img = mysqli_real_escape_string($connection, $rec_tool_img);
  }
  // TODO: $rec_step = mysqli_real_escape_string($connection, $_POST['recStep']);
  // TODO: $rec_step_img = mysqli_real_escape_string($connection, $_POST['recStepImg']);

  // Form validation

  $query = 'UPDATE recipes SET ';
  $query .= "title = '{$rec_title}', ";
  $query .= "side = '{$rec_side}', ";
  if (!empty($rec_hero)) {
    $query .= "hero_image = '{$rec_hero}', ";
  }
  $query .= "description = '".$rec_desc."', ";
  $query .= "time = '{$rec_time}', ";
  $query .= "servings = '{$rec_serv}', ";
  $query .= "nutrition = '{$rec_nutr}', ";
  // TODO: $query .= "ingredients = '{$rec_ing}', ";
  if (!empty($rec_ing_img)) {
    $query .= "ing_img = '{$rec_ing_img}', ";
  }
  $query .= "kitchen_tool = '{$rec_tool_title}' ";
  // $query .= "kitchen_tool_desc = '{$rec_tool_desc}', ";
  // TODO: $query .= "tool_img = '{$rec_tool_img}', ";
  // TODO: $query .= "step_img_high = '{$rec_step_img}', ";
  // TODO: $query .= "steps = '{$rec_step}' ";

  $query .= "WHERE id = {$safe_id} ";
  $query .= 'LIMIT 1';

  $result_update = mysqli_query($connection, $query);

  if ($result_update && mysqli_affected_rows($connection) == 1) {
    // success
    $message = '<div class="alert alert-success" role="alert">Page Updated!</div>';
  } else {
    $message = '<div class="alert alert-danger" role="alert">Page update failed!</div>';
  }
}

require_once "includes/_head.php";
?>

<main>
<?php
  if (isset($message)) {
    echo $message;
  }
?>

  <?php
    if (isset($safe_id)) {
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= "WHERE id = {$safe_id} ";
      $query .= 'LIMIT 1';

      $result = mysqli_query($connection, $query);

      if (!$result) {
        die('Database query failed.');
      }


      while ($recipe = mysqli_fetch_assoc($result)) {
  ?>
  <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $safe_id; ?>" id="rec-form">
    <h2>General Recipe Information</h2>
    <div class="input-cont">
      <label for="recTitle">Recipe Title</label>
      <input type="text" name="recTitle" class="form-item" value="<?php echo $recipe["title"] ?>" required>
    </div>
    
    <div class="input-cont">
      <label for="recSide">Side</label>
      <input type="text" name="recSide" class="form-item" value="<?php echo $recipe["side"] ?>" required>
    </div>

    <div class="input-cont">
      <label for="recHero">Main Image</label>
      <input type="file" name="recHero[]" id="recHero" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="recHero" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <div class="input-cont">
      <label for="recThumbSm">Small Thumbnail</label>
      <input type="file" name="recThumbSm[]" id="recThumbSm" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="recThumbSm" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <div class="input-cont">
      <label for="recThumbLg">Large Thumbnail</label>
      <input type="file" name="recThumbLg[]" id="recThumbLg" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="recThumbLg" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>
    
    <div class="input-cont">
      <label for="recDesc">Recipe Description</label>
      <textarea name="recDesc" id="recDesc" class="form-item" cols="30" rows="10" value="thumb_sm.jpg" required>
        <?php echo $recipe["description"] ?>
      </textarea>
    </div>
    
    <div class="input-cont">
      <label for="recTime">Cook Time</label>
      <input type="number" name="recTime" class="form-item" value="<?php echo $recipe["time"] ?>" required>
      <span class="rec-data">
        <p>minutes</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="recServ">Servings</label>
      <input type="number" name="recServ" class="form-item" value="<?php echo $recipe["servings"] ?>" required>
      <span class="rec-data">
        <p>servings</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="recNutr">Total Calories</label>
      <input type="number" name="recNutr" class="form-item" value="<?php echo $recipe["nutrition"] ?>" required>
      <span class="rec-data">
        <p>nutrition</p>
      </span>
    </div>
    
    <h2>Ingredients</h2>
    <div class="input-cont">
      <label for="recIng">Ingredient List</label>
      <p class="instruction">Please submit a bulletted list.</p>
      <div class="example">
        <p>Example:</p>
        <ul>
          <li>Ingredient 1</li>
          <li>Ingredient 2</li>
        </ul>
      </div>
      <textarea name="recIng" id="recIng" class="form-item" cols="30" rows="10" required>
      <ul id="ing_list">
            <?php
              $ings = explode(";", $recipe["ingredients"]);
              foreach ($ings as $ing) {
                ?>
                  <li><?php echo $ing ?></li>
                <?php
              }
            ?>
          </ul>
      </textarea>
    </div>

    <div class="input-cont">
      <label for="recIngImg">Ingredients Image</label>
      <input type="file" name="recIngImg[]" id="recIngImg" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="recIngImg" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <h2>Kitchen Tool</h2>
    <div class="input-cont">
      <label for="recToolTitle">Kitchen Tool Name</label>
      <input type="text" name="recToolTitle" class="form-item" value="<?php echo $recipe["kitchen_tool"] ?>" required>
    </div>
    
    <div class="input-cont">
      <label for="recToolDesc">Kitchen Tool Description</label>
      <textarea name="recToolDesc" id="recToolDesc" class="form-item" cols="30" rows="10" required>
        <p>
          <?php
            echo $recipe["kitchen_tool_desc"]
          ?>
        </p>
      </textarea>
    </div>

    <div class="input-cont">
      <label for="recToolImg">Kitchen Tool Image</label>
      <input type="file" name="recToolImg[]" id="recToolImg" class="form-item inputfile" accept="image/jpg, image/png" data-multiple-caption="{count} files selected" multiple>
      <label for="recToolImg" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <h2>Step by Step Instructions</h2>
    <div class="input-cont">
      <label for="recStep_desc">Step Instruction</label>
      <p class="instructions">Please submit a multilevel list</p>
      <div class="example">
        <p>Example:</p>
        <ol>
          <li>Step ont title
            <ol>
              <li>Step two description</li>
            </ol>
          </li>
          <li>Step two title
            <ol>
              <li>Step two description</li>
            </ol>
          </li>
        </ol>
      </div>
      <textarea name="recStep" id="recStep" class="form-item" cols="30" rows="10" required>
      <ol id="dir_list">
          <?php 
            $steps = explode("]\[", $recipe["steps"]);           

            $i = 0;
            while ($i < count($steps)) {
              $step = $steps[$i];
                $first_letter = substr($step, 0, 1);
                $last_letter = substr($step, -1);
                if ($first_letter = "[") {
                  $step = ltrim($step, '[');
                }
                if ($last_letter = "]") {
                  $step = rtrim($step, ']');
                }
                $step_exp = explode("|", $step);
              ?>
                <li><?php echo $step_exp[0] ?>
                  <ol>
                    <li>
                      <?php echo $step_exp[1] ?>
                    </li>
                  </ol>
                </li>
              <?php
              $i++;
            }
          ?>
        </ol>
      </textarea>
    </div>

    <div class="input-cont">
      <label for="recStepImg">Step Images</label>
      <input type="file" name="recStepImg[]" id="recStepImg" class="form-item inputfile" accept="image/jpg, image/png" data-multiple-caption="{count} files selected" multiple>
      <label for="recStepImg" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <div class="input-cont">
      <input type="submit" value="Submit" name="submit" class="nav-link" method="POST" enctype="multipart/form-data">
    </div>
  </form>
</main>

<?php
    } // end while loop
  } // end if
?>

<?php
  require_once "includes/_scripts.php";
?>
  <script src="js/main.js"></script>
  <script>
    // CKEDITOR.replace( 'recDesc' );
    // CKEDITOR.replace( 'recIng' );
    // CKEDITOR.replace( 'recToolDesc' );
    // CKEDITOR.replace( 'recStep' );
  </script>
<?php
  require_once "includes/_footer.php";
?>