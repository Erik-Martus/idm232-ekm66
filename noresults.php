<?php
  require "includes/_head.php";
?>

  <main>
    <h1>No Results</h1>
    <form action="">
      <input type="search" name="search_again" id="search_again" placeholder="Refine your search">
    </form>
    <div class="search_results">
      <object id="fail_icon" data="img/icons/sad_chef.svg" type="image/svg+xml">
        <!-- Get png -->
      </object>
      <h3>Sorry, we can't find what you're looking for.</h3>
    </div>
  </main>

<?php
  require "includes/_footer.php";
?>