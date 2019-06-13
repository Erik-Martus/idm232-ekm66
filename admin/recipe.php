<?php

require_once "../includes/_global.php";
require_once "../includes/_db.php";

require_once "includes/_head.php";

if (isset($_GET["id"])) {
  $id = $_GET["id"];

  $safe_id = mysqli_real_escape_string($connection, $id);
}

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

<main>
  <form action="recipe.php?go" id="rec-form">
    <div class="input-cont">
      <label for="rec-title">Recipe Title</label>
      <input type="text" name="rec-title" class="form-item" value="<?php echo $recipe["title"] ?>">
    </div>
    
    <div class="input-cont">
      <label for="rec-side">Side</label>
      <input type="text" name="rec-side" class="form-item" value="<?php echo $recipe["side"] ?>">
    </div>

    <div class="input-cont">
      <label for="rec-hero">Main Image</label>
      <input type="text" name="rec-hero" class="form-item" value="<?php echo $recipe["hero_image"] ?>">
    </div>
    
    <div class="input-cont">
      <label for="rec-hero">Main Image</label>
      <input type="file" name="rec-hero" class="form-item input-file" accept="image/jpg, image/png">
      <label for="rec-hero" class="file-lable">Please select a file</label>
    </div>
    
    <div class="input-cont">
      <label for="rec-thumb_sm">Recipe Thumbnail (Small)</label>
      <input type="text" name="rec-thumb_sm" class="form-item" value="thumb_sm.jpg">
    </div>
    
    <div class="input-cont">
      <label for="rec-thumb_lg">Recipe Thumbnail (Large)</label>
      <input type="text" name="rec-thumb_lg" class="form-item" value="thumb_lg.jpg">
    </div>
    
    <div class="input-cont">
      <label for="rec-desc">Recipe Description</label>
      <textarea name="rec-desc" id="rec-desc" class="form-item" cols="30" rows="10" value="thumb_sm.jpg">
        <?php echo $recipe["description"] ?>
      </textarea>
    </div>
    
    <div class="input-cont">
      <label for="rec-time">Cook Time</label>
      <input type="number" name="rec-time" class="form-item" value="<?php echo $recipe["time"] ?>">
      <span>
        <p>minutes</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="rec-serv">Servings</label>
      <input type="number" name="rec-serv" class="form-item" value="<?php echo $recipe["servings"] ?>">
      <span>
        <p>servings</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="rec-nutr">Total Calories</label>
      <input type="number" name="rec-nutr" class="form-item" value="<?php echo $recipe["nutrition"] ?>">
      <span>
        <p>nutrition</p>
      </span>
    </div>
    
    <div class="input-cont">
      <label for="rec-ing">Ingredients</label>
      <p class="instruction">Please submit a bulletted list.</p>
      <div class="example">
        <p>Example:</p>
        <ul>
          <li>Ingredient 1</li>
          <li>Ingredient 2</li>
        </ul>
      </div>
      <textarea name="rec-ing" id="rec-ing" class="form-item" cols="30" rows="10">
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
      <label for="rec-ing_img">Ingredient Image</label>
      <input type="text" name="rec-ing_img" class="form-item" value="<?php echo $recipe["ing_img"] ?>">
    </div>
    
    <div class="input-cont">
      <label for="rec-tool_title">Kitchen Tool Name</label>
      <input type="text" name="rec-tool_title" class="form-item" value="<?php echo $recipe["kitchen_tool"] ?>">
    </div>
    
    <div class="input-cont">
      <label for="rec-tool_desc">Kitchen Tool Description</label>
      <textarea name="rec-tool_desc" id="rec-tool_desc" class="form-item" cols="30" rows="10">
        <p>
          <?php
            echo $recipe["kitchen_tool_desc"]
          ?>
        </p>
      </textarea>
    </div>

    <div class="input-cont">
      <label for="rec-tool_img">Kitchen Tool Image</label>
      <input type="text" name="rec-tool_img" class="form-item" value="<?php echo $recipe["tool_img"] ?>">
    </div>

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
        <textarea name="rec-step" id="rec-step" class="form-item" cols="30" rows="10">
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
        <label for="rec-step_img_sm">Step Images</label>
        <input type="text" name="rec-img_sm" class="form-item" value="<?php echo $recipe["step_img_high"] ?>">
      </div>
      
      <div class="input-cont">
        <label for="rec-step_img_lg">Step Image (High Resolution)</label>
        <input type="text" name="rec-img_lg" class="form-item" value="<?php echo $recipe["step_img_retina"] ?>">
      </div>
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
  <script>
    CKEDITOR.replace( 'rec-desc' );
    CKEDITOR.replace( 'rec-ing' );
    CKEDITOR.replace( 'rec-tool_desc' );
    CKEDITOR.replace( 'rec-step' );
  </script>
<?php
  require_once "includes/_footer.php";
?>