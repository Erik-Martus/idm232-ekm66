<?php require "includes/_head.php"; ?>

  <main>
    <h1>Search</h1>
    <form id="search_form" action="search.php?go">
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
            <h4>Entree</h4> <!-- TODO: get accent thing for first e -->
            <span>
              <label class="option" for="ing-beef">Beef
                <input type="checkbox" name="ing-beef" id="ing-beef">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="ing-chx">Chicken
                <input type="checkbox" name="ing-chx" id="ing-chx">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="ing-past">Pasta
                <input type="checkbox" name="ing-past" id="ing-past">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="ing-pork">Pork
                <input type="checkbox" name="ing-pork" id="ing-pork">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="ing-veg">Vegetables
                <input type="checkbox" name="ing-veg" id="ing-veg">
                <span class="check"></span>
              </label>
            </span>
          </div>
          <div class="category">
            <h4>Cuisine</h4>
            <span>
              <label class="option" for="cuis-amer">American
                <input type="checkbox" name="cuis-amer" id="cuis-amer">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="cuis-asia">Asian
                <input type="checkbox" name="cuis-asia" id="cuis-asia">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="cuis-ital">Italian
                <input type="checkbox" name="cuis-ital" id="cuis-ital">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="cuis-mex">Mexican
                <input type="checkbox" name="cuis-mex" id="cuis-mex">
                <span class="check"></span>
              </label>
            </span>
          </div>
          <div class="category">
            <h4>Cook Time</h4>
            <span>
              <label class="option" for="time-twenty">20 Minutes
                <input type="checkbox" name="time-twenty" id="time-twenty">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="time-thirty">30 Minutes
                <input type="checkbox" name="time-thirty" id="time-thirty">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="time-fortyfive">45 Minutes
                <input type="checkbox" name="time-fortyfive" id="time-fortyfive">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="time-hour">1 Hour
                <input type="checkbox" name="time-hour" id="time-hour">
                <span class="check"></span>
              </label>
            </span>
          </div>
          <div class="category">
            <h4>Servings</h4>
            <span>
              <label class="option" for="serv-two">2 servings
                <input type="checkbox" name="serv-two" id="serv-two">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="serv-three">3 servings
                <input type="checkbox" name="serv-three" id="serv-three">
                <span class="check"></span>
              </label>
            </span>
            <span>
              <label class="option" for="serv-four">4 servings
                <input type="checkbox" name="serv-four" id="serv-four">
                <span class="check"></span>
              </label>
            </span>
          </div>
        </div>
      </div> <!-- End filter -->
      <input type="submit" value="Search" class="red-btn search-btn">
    </form>
    
    <?php 
      // following this search tutorial http://webreference.com/programming/php/search/2.html
      // probably isn't the best for my use case will look into it
      // TODO: Ask Beck how his search works and if it is w filters or not
      if (isset ($_POST['submit'])) {
        if (isset($_GET['go'])) {
          
        } else {
          include "includes/_featured.php";
        }
      } else {
        include "includes/_featured.php";
      }
    ?>
    
  </main>

<?php require "includes/_footer.php"; ?>