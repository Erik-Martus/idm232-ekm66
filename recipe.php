<?php
// TODO: Add recipe name to title
$id = isset($_GET["id"]) ? $_GET["id"] : null;

require_once "includes/_global.php";

require "includes/_head.php";

if (!$id) {
  redirect_to("index.php");
} else {
  $query = 'SELECT * ';
  $query .= 'FROM recipes ';
  $query .= "WHERE id = '{$id}' ";
  $query .= 'LIMIT 1';
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Database query failed.');
  }
}

while ($recipe = mysqli_fetch_assoc($result)) {
  ?>


  <main>
    <div id="rec-wrap">
        <img id="rec-hero" 
          src="img/recipes/<?php echo $id . "/" . $recipe["hero_image"] ?>" 
          alt="<?php echo $recipe["title"] ?>">
        <h1 id="rec-title"><?php echo $recipe["title"] ?></h1>
        <h2 id="rec-sides">with <?php echo $recipe["side"] ?></h2>
  
      <!-- Cook time, servings, nutrition -->
      <section id="rec-stats">
        <div class="info"><?php echo $recipe["time"] ?> Minutes</div>
        <div class="info"><?php echo $recipe["servings"] ?> Servings</div>
        <div class="info"><?php echo $recipe["nutrition"] ?> Cals.</div>
      </section>
  
      <div id="rec-desc" class="rec">
        <p>
          <?php echo $recipe["description"] ?>
        </p>
      </div>
  
      <!-- Main recipe info -->
      <div id="rec-info" class="rec">
        <section id="ingredients">
          <h3>Ingredients</h3>
          
          <img src="img/recipes/<?php echo $id . "/" . $recipe["ing_img"] ?>" alt="Ingredients">
          
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
        </section> <!-- End Ingredients -->
        
        <section id="tools">
          <h3>Kitchen Tools</h3>
  
          <img
            src="img/kitchen_tools/<?php echo $recipe["tool_img"] ?>"
            alt="<?php echo $recipe["kitchen_tool"] ?>"
          >
          <?php
            if (strpos($recipe["kitchen_tool"], ",")) {
              $tool_str = explode(",", $recipe["kitchen_tool"]);
              ?>
              <h4><?php echo $tool_str[0] ?></h4>
              <h5><?php echo $tool_str[1] ?></h5>
              <?php
            } else {
              ?>
              <h4><?php echo $recipe["kitchen_tool"] ?></h4>
              <?php
            }
          ?>

          <p>
            <?php echo $recipe["kitchen_tool_desc"]
            ?>
          </p>
        </section>
  
        <section id="directions">
          <h3>Step-by-Step Directions</h3>
          <ol id="dir_list">
            <?php 
              $steps = explode("]\[", $recipe["steps"]);
              $step_img_high = explode("\\", $recipe["step_img_high"]);            

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
                  <li>
                    <h4><?php echo $step_exp[0] ?></h4>
                    <img src="img/recipes/<?php echo $id . "/" . $step_img_high[$i] ?>" alt="" class="step_img">
                    <p><?php echo $step_exp[1] ?></p>
                  </li>
                <?php
                $i++;
              }
            ?>
          </ol>
        </section> <!-- End #dir-list -->
      </div> <!-- End #rec-info -->
    </div> <!-- End #rec-wrap -->
  </main>

<?php
  } // end while
  mysqli_free_result($result);
  require "includes/_footer.php";
?>