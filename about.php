<?php 
  require_once "includes/_global.php";
  $title .= " | About Us";
  require "includes/_head.php"; ?>

<main>
  <section id="hero" class="index_hero"></section>

  <!-- Mission Statement -->
  <section id="mission">
    <h2>Our Mission</h2>
    <h3>Delicious Food</h3>
    <p>Everyone deserves to eat delicious food, whether it be out with friends and family or in the comfort of their own home.</p>
    <h3>Easy to Make Meals</h3>
    <p>Cooking isn't difficult, everyone can do it (yes, even you). Our recipes come with step-by-step instructions that guide you from raw ingredients through finished meal.</p>
    <h3>Perfection Every Time</h3>
    <p>With our help you will be able to prepare delicious food at home and achieve perfection every time. Satisfaction guaranteed.</p>
  </section>

  <section id="about">
    <h2>Who we are</h2>
    <p>Founded in 2019 at Drexel University, Home Chef is </p>
  </section>
</main>

<?php 
  require "includes/_footer.php"; 
  mysqli_free_result($result);
?>