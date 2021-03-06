<?php
  require_once "includes/_initialize.php";

  require_once "includes/_global.php";
  $title .= " | Recipes";

  
  $search_result = isset($_GET["search"]) ? $_GET["search"] : null;
  
  if (isset($_GET["search"])) {
    $title = "Home Chef" . " | Search" . " - " . $search_result;
  }

  require "includes/_head.php";
?>

  <main>
    <h1>
      <?php
        if (isset($_GET["search"])) {
          echo ucfirst($_GET["search"]);
        } else {
          echo "Browse Our Recipes";
        }
      ?>
    </h1>
    <form id="search_form" action="browse.php?go">
      <input type="search" name="search" id="search" placeholder="What do you want to cook?">
      <div id="filter">
        <div id="filter_toggle">
          <svg id="filter_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 51">
            <g>
              <path id="filter_icon" d="M48.4,4c0.6,0,1,0.3,1.1,0.5C49.7,4.6,50,5,50,5.6c0,0.4-0.1,0.8-0.4,1.1L31,27.1l-1,1.1v1.5V40l-6,4.8V29.8v-1.5l-1-1.1 L4.4,6.7C4,6.3,4,5.8,4,5.5c0-0.2,0.1-0.7,0.5-1.1C4.8,4.1,5.2,4,5.6,4H48.4 M48.4,0H5.6C4.2,0,2.9,0.5,1.8,1.5 c-2.3,2.1-2.5,5.6-0.4,7.9L20,29.8V49c0,1.1,0.9,2,2,2c0.5,0,0.9-0.2,1.3-0.4l10-8c0.5-0.4,0.7-1,0.8-1.6V29.8L52.5,9.4 C53.5,8.3,54,7,54,5.6C54,2.5,51.5,0,48.4,0L48.4,0z"/>
            </g>
          </svg>
        </div>
        <div id="filter_options" class="collapse">
          <div class="category">
            <h4>Cuisine</h4>
            <span>
              <label class="option" for="cuis-amer">American
                <input type="radio" name="cuisine[]" value="american" id="cuis-amer">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="cuis-asia">Asian
                <input type="radio" name="cuisine[]" value="asian" id="cuis-asia">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="cuis-ital">Italian
                <input type="radio" name="cuisine[]" value="italian" id="cuis-ital">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="cuis-mex">Mexican
                <input type="radio" name="cuisine[]" value="mexican" id="cuis-mex">
                <span class="check"></span>
              </label>
            </span>
          </div>
          <div class="category">
            <h4 class="cook-time">Cook Time</h4>
            <span>
              <label class="option" for="time-twenty">20 Minutes
                <input type="radio" name="time[]" value="20" id="time-twenty">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="time-thirty">30 Minutes
                <input type="radio" name="time[]" value="30" id="time-thirty">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="time-fortyfive">45 Minutes
                <input type="radio" name="time[]" value="45" id="time-fortyfive">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="time-hour">1 Hour
                <input type="radio" name="time[]" value="60" id="time-hour">
                <span class="check"></span>
              </label>
            </span>
          </div>
          <div class="category">
            <h4>Servings</h4>
            <span>
              <label class="option" for="serv-two">2 servings
                <input type="radio" name="serving[]" value="2" id="serv-two">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="serv-three">3 servings
                <input type="radio" name="serving[]" value="3" id="serv-three">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="serv-four">4 servings
                <input type="radio" name="serving[]" value="4" id="serv-four">
                <span class="check"></span>
              </label>
            </span>
          </div>
        </div>
      </div> <!-- End filter -->
      <input type="submit" value="Search" class="red-btn submit-btn">
    </form>
    
    <section id="rec_results" class="rec_grid">
      <?php 
        $search_result_orig = $search_result;
        $search_result = mysqli_real_escape_string($connection, $search_result);
  
        if ($search_result !== null) {
          $query = "SELECT * ";
          $query .= "FROM `recipes` ";
          $query .= "WHERE (`title` LIKE '%{$search_result}%' ";
          $query .= "OR `side` LIKE '%{$search_result}%' ";
          $query .= "OR `description` LIKE '%{$search_result}%' ";
          $query .= "OR `ingredients` LIKE '%{$search_result}%' ";
          $query .= "OR `steps` LIKE '%{$search_result}%' ";
          $query .= "OR `tags` LIKE '%{$search_result}%' ";
          $query .= ")";
        }
        
        if(isset($_GET["cuisine"])) {
          $filter_cuisine = $_GET['cuisine'];
          $cuisine = array_shift($filter_cuisine);

          $query .= "AND (`tags` LIKE '%{$cuisine}%') ";
        }
        
        if(isset($_GET["time"])) {
          $filter_time = $_GET['time'];
          $filter_time = $filter_time[0];
          $time = (int)$filter_time;

          $query .= "AND (`time` <= $time) ";
        }
        
        if(isset($_GET["serving"])) {
          $filter_serving = $_GET['serving'];
          $filter_serving = $filter_serving[0];
          $serving = (int)$filter_serving;

          $query .= "AND (`servings` <= $serving) ";
        }

        if(isset($query)) {
          $query .= "ORDER by substring(Title,1,-1)";
        }

        $result = mysqli_query($connection, $query);
    
        if (!$result) {
          die("Database connection failed.");
        }
        elseif (mysqli_num_rows($result) == 0) {
          ?>
            <div id="no-results">
              <h2>Sorry, we couldn't find any recipes that matched that.</h2>
              <a href="browse.php" class="red-btn rec-btn">Back to Browse</a>
            </div>
          <?php
        }
        else {
          while($recipe = mysqli_fetch_assoc($result)) {
            include "includes/_item.php";
          } // End while loop
        }
      ?>
    </section>
    
  </main>

<?php require "includes/_footer.php"; ?>