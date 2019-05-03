<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Typkit Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/qzq6gzd.css">
  <link rel="stylesheet" href="css/main.css">

  <title>Home Chef - Recipe Template</title>
</head>
<body>
<header>
    <a href="index.php"><img id="logo" src="img/logo.svg" alt="Home Chef Logo"></a>
    <span id="search"><img src="img/search.svg" alt="Search Icon"></span>
    <form action="">
      <input type="search" name="search" id="search">
    </form>
    <span id="burger">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <nav>
      <button id="filterTrigger">
        <p>Filter</p>
      </button>
      <div id="filters">
        <section class="filterType">
          <h4>Main Ingredient</h4>
          <ul>
            <li><a href="#">Beef</a></li>
            <li><a href="#">Chicken</a></li>
            <li><a href="#">Pasta</a></li>
            <li><a href="#">Pork</a></li>
            <li><a href="#">Vegetables</a></li>
          </ul>
        </section>
        <section class="filterType">
          <h4>Cuisine</h4>
          <ul>
            <li><a href="#">American</a></li>
            <li><a href="#">Asian</a></li>
            <li><a href="#">Italian</a></li>
          </ul>
        </section>
        <secion class="filterType">
          <h4>Cook Time</h4>
          <ul>
            <li><a href="#">20 Minutes</a></li>
            <li><a href="#">30 Minutes</a></li>
            <li><a href="#">45 Minutes</a></li>
            <li><a href="#">1 Hour</a></li>
          </ul>
        </secion>
        <section class="filterType">
          <h4>Servings</h4>
          <ul>
            <li><a href="#">1 Serving</a></li>
            <li><a href="#">2 Servings</a></li>
            <li><a href="#">4 Servings</a></li>
          </ul>
        </section>
      </div>
      <a href="#" class="navLink">All Recipes</a>
      <a href="about.php" class="navLink">About Us</a>
      <a href="contact.php" class="navLink">Contact Us</a>
    </nav>
  </header>

  <main>
    <div id="recipeHero">
      <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res.jpg" alt="Ancho-Orange Chicken">
      <h1>Ancho-Orange Chicken</h1>
      <h2 id="subtitle">with Kale, Rice & Roasted Carrots</h2>
    </div>

    <!-- Cook time, servings, nutrition -->
    <section id="recipeStats">
      <div id="info">45 Minutes</div>
      <div id="info">4 Servings</div>
      <div id="info">600 Cals.</div>
    </section>

    <div id="recipeDesc">
      <p>
        Weʼre amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.
      </p>
    </div>

    <!-- Main recipe info -->
    <div id="recipeInfo">
      <section id="ingredients">
        <h3>Ingredients</h3>
        
        <img src="img/recipes/ancho-orange_chicken/0101_ING_FPP_large_feature.png" alt="Ingredients">
        
        <ul id="ingList">
          <li>4  Boneless, Skinless Chicken Breasts</li>
          <li>1  Lime</li>
          <li>1 Tbsp  Ancho Chile Paste</li>
          <li>1 bunch  Kale</li>
          <li>2 Tbsps  Butter</li>
          <li>3&frasl;4 cup  Jasmine Rice</li>
          <li>2 cloves  Garlic</li>
          <li>2 Tbsps  Crème Fraîche</li>
          <li>4  Carrots</li>
          <li>3 Tbsps  Golden Raisins</li>
          <li>1  Orange</li>
        </ul>
      </section> <!-- End Ingredients -->
      
      <section id="tools">
        <h3>Kitchen Tools</h3>

        <img src="img/recipes/kitchen_tools/Garlic_Press9652.jpg" alt="Garlic Press">

        <p>
          Slicing garlic has never been simpler. This two-sided essential is designed to do two jobs in one: crush garlic and slice it. Made by Harold Import Company, a family-owned American business with over 50 years of experience, this easy-to-use press owes its incredible durability to its heavyweight, stainless steel construction. To use it, simply place the clove in the hopper and press downward for freshly pressed garlic, or flip it over to get uniform slices of garlic. And to ensure minimal mess, it includes a handy cleaning tool for removing leftover pressed garlic after use.
        </p>
      </section>

      <section id="directions">
        <h3>Step-by-Step Directions</h3>

        <!-- Switch to toggle direction images on and off -->
        <div id="imgToggle">
          <p>Turn Images On/Off</p>
          <label class="switch">
            <input type="checkbox" name="imageToggle" id="imgTogSwitch">
            <span class="slider"></span>
          </label>
        </div>
        <ol id="dirList">
          <li>
            <h4>Cook the rice:</h4>
            <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_18594_WEB_high_feature.jpg" alt="Cooking rice">
            <p>Place an oven rack in the center of the oven, then preheat to 450°F. In a medium pot, combine the rice, a big pinch of salt, and 1 1/2 cups of water. Heat to boiling on high. Once boiling, cover and reduce the heat to low. Cook 12 to 14 minutes, or until the water has been absorbed and the rice is tender. Turn off the heat and fluff with a fork. Cover to keep warm.</p>
          </li>
          <li>
            <h4>Prepare the ingredients & make the glaze:</h4>
            <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_18622_WEB_high_feature.jpg" alt="Ingredients and glaze">
            <p>While the rice cooks, wash and dry the fresh produce. Peel the carrots; quarter lengthwise, then halve crosswise. Peel and roughly chop the garlic. Remove and discard the stems of the kale; finely chop the leaves. Using a peeler, remove the lime rind, avoiding the white pith; mince to get 2 teaspoons of zest (or use a zester). Halve the lime crosswise. Halve the orange; squeeze the juice into a bowl, straining out any seeds. Whisk in the chile paste and 2 tablespoons of water until smooth.</p>
          </li>
          <li>
            <h4>Roast the carrots:</h4>
            <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_18626_WEB_high_feature.jpg" alt="Roasing carrots on a sheet pan">
            <p>Place the sliced carrots on a sheet pan. Drizzle with olive oil and season with salt and pepper; toss to coat. Arrange in an even layer. Roast 15 to 17 minutes, or until tender when pierced with a fork. Remove from the oven.</p>
          </li>
          <li>
            <h4>Cook the kale:</h4>
            <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_18609_WEB_high_feature.jpg" alt="Cooking kale in a pan">
            <p>While the carrots roast, in a large pan (nonstick, if you have one), heat 2 teaspoons of olive oil on medium-high until hot. Add the chopped garlic and cook, stirring constantly, 30 seconds to 1 minute, or until fragrant. Add the chopped kale; season with salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until slightly wilted. Add 1/3 cup of water; season with salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until the kale has wilted and the water has cooked off. Transfer to the pot of cooked rice. Stir to combine; season with salt and pepper to taste. Cover to keep warm. Wipe out the pan.</p>
          </li>
          <li>
            <h4>Cook & glaze the chicken:</h4>
            <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_18639_WEB_high_feature.jpg" alt="Cooking and glazing chicken in a pan">
            <p>While the carrots continue to roast, pat the chicken dry with paper towels; season with salt and pepper on both sides. In the same pan, heat 2 teaspoons of olive oil on medium-high until hot. Add the seasoned chicken and cook 4 to 6 minutes on the first side, or until browned. Flip and cook 2 to 3 minutes, or until lightly browned. Add the glaze and cook, frequently spooning the glaze over the chicken, 2 to 3 minutes, or until the chicken is coated and cooked through. Turn off the heat; stir the butter and the juice of 1 lime half into the glaze until the butter has melted. Season with salt and pepper to taste.</p>
          </li>
          <li>
            <h4>Finish the rice & serve your dish:</h4>
            <img src="img/recipes/ancho-orange_chicken/0101_FPP_Chicken-Rice_18630_WEB_high_feature.jpg" alt="Adding kale to rice pot">
            <p>To the pot of cooked rice and kale, add the lime zest, crème fraîche, raisins, and the juice of the remaining lime half. Stir to combine; season with salt and pepper to taste. Serve the glazed chicken with the finished rice and roasted carrots. Top the chicken with the remaining glaze from the pan. Enjoy!</p>
          </li>
        </ol>
      </section>
    </div>
  </main>

  <footer>
    <div id="social">
      <h6>Follow Us</h6>
      <img src="img/social/facebook.svg" alt="Facebook Logo">
      <img src="img/social/twitter.svg" alt="Twitter Logo">
      <img src="img/social/instagram.svg" alt="Instagram Logo">
    </div>
    <div id="footerNav">
      <ul>
        <li class="footLink"><a href="index.php">Home</a></li>
        <li class="footLink"><a href="about.php">About Us</a></li>
        <li class="footLink"><a href="contact.php">Contact Us</a></li>
        <li class="footLink"><a href="support.php">Support</a></li>
      </ul>
    </div>
  </footer>
</body>
</html>