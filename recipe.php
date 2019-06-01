<?php
  require "includes/_head.php";

  $id = isset($_GET["id"]) ? $_GET["id"] : null;

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
            <li><?php echo $recipe["ingredients"] ?></li>
            <?php
              $ings = explode(";", $recipe["ingredients"]);
              print_r($ings);
              foreach ($ings as $ing) {
                ?>
                  <li><?php echo $ing ?></li> <!-- Why is this creating charater errors? htmlentities did not work, just removed item+ -->
                <?php
              }
            ?>
          </ul>
        </section> <!-- End Ingredients -->
        
        <section id="tools">
          <h3>Kitchen Tools</h3>
  
          <img src="img/kitchen_tools/Garlic_Press9652.jpg" alt="Garlic Press">
  
          <p>
            Slicing garlic has never been simpler. This two-sided essential is designed to do two jobs in one: crush garlic and slice it. Made by Harold Import Company, a family-owned American business with over 50 years of experience, this easy-to-use press owes its incredible durability to its heavyweight, stainless steel construction. To use it, simply place the clove in the hopper and press downward for freshly pressed garlic, or flip it over to get uniform slices of garlic. And to ensure minimal mess, it includes a handy cleaning tool for removing leftover pressed garlic after use.
          </p>
        </section>
  
        <section id="directions">
          <h3>Step-by-Step Directions</h3>
  
          <!-- Switch to toggle direction images on and off -->
          <!-- <div id="img_toggle">
            <p>Images</p>
            <input id="toggle-on" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
            <label for="toggle-on" class="btn">On</label>
            <input id="toggle-off" class="toggle toggle-right" name="toggle" value="true" type="radio">
            <label for="toggle-off" class="btn">Off</label>
          </div> -->
          <ol id="dir_list">
            <li>
              <h4>Cook the rice:</h4>
              <img class="step_img" src="img/recipes/01/0101_FPP_Chicken-Rice_18594_WEB_high_feature.jpg" alt="Cooking rice">
              <p>Place an oven rack in the center of the oven, then preheat to 450°F. In a medium pot, combine the rice, a big pinch of salt, and 1 1/2 cups of water. Heat to boiling on high. Once boiling, cover and reduce the heat to low. Cook 12 to 14 minutes, or until the water has been absorbed and the rice is tender. Turn off the heat and fluff with a fork. Cover to keep warm.</p>
            </li>
            <li>
              <h4>Prepare the ingredients & make the glaze:</h4>
              <img class="step_img" src="img/recipes/01/0101_FPP_Chicken-Rice_18622_WEB_high_feature.jpg" alt="Ingredients and glaze">
              <p>While the rice cooks, wash and dry the fresh produce. Peel the carrots; quarter lengthwise, then halve crosswise. Peel and roughly chop the garlic. Remove and discard the stems of the kale; finely chop the leaves. Using a peeler, remove the lime rind, avoiding the white pith; mince to get 2 teaspoons of zest (or use a zester). Halve the lime crosswise. Halve the orange; squeeze the juice into a bowl, straining out any seeds. Whisk in the chile paste and 2 tablespoons of water until smooth.</p>
            </li>
            <li>
              <h4>Roast the carrots:</h4>
              <img class="step_img" src="img/recipes/01/0101_FPP_Chicken-Rice_18626_WEB_high_feature.jpg" alt="Roasing carrots on a sheet pan">
              <p>Place the sliced carrots on a sheet pan. Drizzle with olive oil and season with salt and pepper; toss to coat. Arrange in an even layer. Roast 15 to 17 minutes, or until tender when pierced with a fork. Remove from the oven.</p>
            </li>
            <li>
              <h4>Cook the kale:</h4>
              <img class="step_img" src="img/recipes/01/0101_FPP_Chicken-Rice_18609_WEB_high_feature.jpg" alt="Cooking kale in a pan">
              <p>While the carrots roast, in a large pan (nonstick, if you have one), heat 2 teaspoons of olive oil on medium-high until hot. Add the chopped garlic and cook, stirring constantly, 30 seconds to 1 minute, or until fragrant. Add the chopped kale; season with salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until slightly wilted. Add 1/3 cup of water; season with salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until the kale has wilted and the water has cooked off. Transfer to the pot of cooked rice. Stir to combine; season with salt and pepper to taste. Cover to keep warm. Wipe out the pan.</p>
            </li>
            <li>
              <h4>Cook & glaze the chicken:</h4>
              <img class="step_img" src="img/recipes/01/0101_FPP_Chicken-Rice_18639_WEB_high_feature.jpg" alt="Cooking and glazing chicken in a pan">
              <p>While the carrots continue to roast, pat the chicken dry with paper towels; season with salt and pepper on both sides. In the same pan, heat 2 teaspoons of olive oil on medium-high until hot. Add the seasoned chicken and cook 4 to 6 minutes on the first side, or until browned. Flip and cook 2 to 3 minutes, or until lightly browned. Add the glaze and cook, frequently spooning the glaze over the chicken, 2 to 3 minutes, or until the chicken is coated and cooked through. Turn off the heat; stir the butter and the juice of 1 lime half into the glaze until the butter has melted. Season with salt and pepper to taste.</p>
            </li>
            <li>
              <h4>Finish the rice & serve your dish:</h4>
              <img class="step_img" src="img/recipes/01/0101_FPP_Chicken-Rice_18630_WEB_high_feature.jpg" alt="Adding kale to rice pot">
              <p>To the pot of cooked rice and kale, add the lime zest, crème fraîche, raisins, and the juice of the remaining lime half. Stir to combine; season with salt and pepper to taste. Serve the glazed chicken with the finished rice and roasted carrots. Top the chicken with the remaining glaze from the pan. Enjoy!</p>
            </li>
          </ol>
        </section> <!-- End #dir-list -->
      </div> <!-- End #rec-info -->
    </div> <!-- End #rec-wrap -->
  </main>

<?php
  } // end while
  myqli_free_result($result);
  require "includes/_footer.php";
?>