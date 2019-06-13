<?php

require_once "../includes/_global.php";
require_once "../includes/_db.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  $safe_id = mysqli_real_escape_string($connection, $id);
}

if (isset($_POST["submit"])) {

  $rec_title = mysqli_real_escape_string($connection, $_POST['rec-title']);
  $rec_side = mysqli_real_escape_string($connection, $_POST['rec-side']);
  if(isset($_POST['rec-hero'])) {
    $rec_hero = $_POST['rec-hero'];
    $rec_hero = $rec_hero[0];
    $test = gettype($rec_hero);
    $rec_hero = mysqli_real_escape_string($connection, $rec_hero);
  }
  print_r($_POST["rec-hero"]); 
  // TODO: $rec_thumb_sm = mysqli_real_escape_string($connection, $_POST['rec-thumb_sm']);
  // TODO: $rec_thumb_lg = mysqli_real_escape_string($connection, $_POST['rec-thumb_lg']);
  // TODO: $rec_desc = mysqli_real_escape_string($connection, $_POST['rec-desc']);
  $rec_time = mysqli_real_escape_string($connection, $_POST['rec-time']);
  $rec_serv = mysqli_real_escape_string($connection, $_POST['rec-serv']);
  $rec_nutr = mysqli_real_escape_string($connection, $_POST['rec-nutr']);
  // TODO: $rec_ing = mysqli_real_escape_string($connection, $_POST['rec-ing']);
  // TODO: $rec_ing_img = mysqli_real_escape_string($connection, $_POST['rec-ing_img']);
  $rec_tool_title = mysqli_real_escape_string($connection, $_POST['rec-tool_title']);
  $rec_tool_desc = mysqli_real_escape_string($connection, $_POST['rec-tool_desc']);
  // TODO: $rec_tool_img = mysqli_real_escape_string($connection, $_POST['rec-tool_img']);
  // TODO: $rec_step = mysqli_real_escape_string($connection, $_POST['rec-step']);
  // TODO: $rec_step_img = mysqli_real_escape_string($connection, $_POST['rec-step_img']);

  // Form validation

  $query = 'UPDATE recipes SET ';
  $query .= "title = '{$rec_title}', ";
  $query .= "side = '{$rec_side}', ";
  if (isset($rec_hero)) {
    print_r($rec_hero);
    $query .= "hero_image = '{$rec_hero}', ";
  }
  // TODO: $query .= "description = '{$rec_desc}', ";
  $query .= "time = '{$rec_time}', ";
  $query .= "servings = '{$rec_serv}', ";
  $query .= "nutrition = '{$rec_nutr}' ";
  // TODO: $query .= "ingredients = '{$rec_ing}', ";
  // TODO: $query .= "ing_img = '{$rec_ing_img}', ";
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
      <label for="rec-title">Recipe Title</label>
      <input type="text" name="rec-title" class="form-item" value="<?php echo $recipe["title"] ?>" required>
    </div>
    
    <div class="input-cont">
      <label for="rec-side">Side</label>
      <input type="text" name="rec-side" class="form-item" value="<?php echo $recipe["side"] ?>" required>
    </div>

    <div class="input-cont">
      <label for="rec-hero">Main Image</label>
      <input type="file" name="rec-hero[]" id="rec-hero" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="rec-hero" class="file-label"><span></span>Choose a file&hellip;</label>
      <?php
        if (isset($_GET["rec-hero"])) {
          echo "set";
        }
      ?>
    </div>

    <div class="input-cont">
      <label for="rec-thumb_sm">Small Thumbnail</label>
      <input type="file" name="rec-thumb_sm[]" id="rec-thumb_sm" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="rec-thumb_sm" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>
    
    <div class="input-cont">
      <label for="rec-thumb_lg">Large Thumbnail</label>
      <input type="file" name="rec-thumb_lg[]" id="rec-thumb_lg" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="rec-thumb_lg" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>
    
    <div class="input-cont">
      <label for="rec-desc">Recipe Description</label>
      <textarea name="rec-desc" id="rec-desc" class="form-item" cols="30" rows="10" value="thumb_sm.jpg" required>
        <?php echo $recipe["description"] ?>
      </textarea>
    </div>
    
    <div class="input-cont">
      <label for="rec-time">Cook Time</label>
      <input type="number" name="rec-time" class="form-item" value="<?php echo $recipe["time"] ?>" required>
      <span class="rec-data">
        <p>minutes</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="rec-serv">Servings</label>
      <input type="number" name="rec-serv" class="form-item" value="<?php echo $recipe["servings"] ?>" required>
      <span class="rec-data">
        <p>servings</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="rec-nutr">Total Calories</label>
      <input type="number" name="rec-nutr" class="form-item" value="<?php echo $recipe["nutrition"] ?>" required>
      <span class="rec-data">
        <p>nutrition</p>
      </span>
    </div>
    
    <h2>Ingredients</h2>
    <div class="input-cont">
      <label for="rec-ing">Ingredient List</label>
      <p class="instruction">Please submit a bulletted list.</p>
      <div class="example">
        <p>Example:</p>
        <ul>
          <li>Ingredient 1</li>
          <li>Ingredient 2</li>
        </ul>
      </div>
      <textarea name="rec-ing" id="rec-ing" class="form-item" cols="30" rows="10" required>
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
      <label for="rec-ing_img">Ingredients Image</label>
      <input type="file" name="rec-ing_img[]" id="rec-ing_img" class="form-item inputfile" accept="image/jpg, image/png">
      <label for="rec-ing_img" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <h2>Kitchen Tool</h2>
    <div class="input-cont">
      <label for="rec-tool_title">Kitchen Tool Name</label>
      <input type="text" name="rec-tool_title" class="form-item" value="<?php echo $recipe["kitchen_tool"] ?>" required>
    </div>
    
    <div class="input-cont">
      <label for="rec-tool_desc">Kitchen Tool Description</label>
      <textarea name="rec-tool_desc" id="rec-tool_desc" class="form-item" cols="30" rows="10" required>
        <p>
          <?php
            echo $recipe["kitchen_tool_desc"]
          ?>
        </p>
      </textarea>
    </div>

    <div class="input-cont">
      <label for="rec-tool_img">Kitchen Tool Image</label>
      <input type="file" name="rec-tool_img[]" id="rec-tool_img" class="form-item inputfile" accept="image/jpg, image/png" data-multiple-caption="{count} files selected" multiple>
      <label for="rec-tool_img" class="file-label"><span></span>Choose a file&hellip;</label>
    </div>

    <h2>Step by Step Instructions</h2>
    <div class="input-cont">
      <label for="rec-step_desc">Step Instruction</label>
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
      <textarea name="rec-step" id="rec-step" class="form-item" cols="30" rows="10" required>
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
      <label for="rec-step_img">Step Images</label>
      <input type="file" name="rec-step_img[]" id="rec-step_img" class="form-item inputfile" accept="image/jpg, image/png" data-multiple-caption="{count} files selected" multiple>
      <label for="rec-step_img" class="file-label"><span></span>Choose a file&hellip;</label>
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
    CKEDITOR.replace( 'rec-desc' );
    CKEDITOR.replace( 'rec-ing' );
    CKEDITOR.replace( 'rec-tool_desc' );
    CKEDITOR.replace( 'rec-step' );
  </script>
<?php
  require_once "includes/_footer.php";
?>