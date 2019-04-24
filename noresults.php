<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home Chef - No Results</title>
</head>
<body>
<header>
    <a href="index.php"><img src="img/logo.svg" alt="Home Chef Logo"></a>
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
    <div class="noResults">
      <img src="img/icons/x.svg" alt="Failed Icon">
      <h3>Sory, we can't find what you're looking for.</h3>
      <a href="contact.php" class="button">Can we help you?</a>
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