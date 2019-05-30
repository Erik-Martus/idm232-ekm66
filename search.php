<?php require "includes/_head.php"; ?>

  <main>
    <h1>Search</h1>
    <form id="search_form" action="">
      <input type="search" name="search" id="search" placeholder="What do you want to cook?">
      <div id="filter">
        <div id="filter_toggle">
          <svg id="filter_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 51">
            <g>
              <path id="filter_icon" d="M48.4,4c0.6,0,1,0.3,1.1,0.5C49.7,4.6,50,5,50,5.6c0,0.4-0.1,0.8-0.4,1.1L31,27.1l-1,1.1v1.5V40l-6,4.8V29.8v-1.5l-1-1.1 L4.4,6.7C4,6.3,4,5.8,4,5.5c0-0.2,0.1-0.7,0.5-1.1C4.8,4.1,5.2,4,5.6,4H48.4 M48.4,0H5.6C4.2,0,2.9,0.5,1.8,1.5 c-2.3,2.1-2.5,5.6-0.4,7.9L20,29.8V49c0,1.1,0.9,2,2,2c0.5,0,0.9-0.2,1.3-0.4l10-8c0.5-0.4,0.7-1,0.8-1.6V29.8L52.5,9.4 C53.5,8.3,54,7,54,5.6C54,2.5,51.5,0,48.4,0L48.4,0z"/>
            </g>
          </svg>
        </div>
        <div id="filter_options">
          <div class="category">
            <h4>Entree</h4> <!-- TODO: get accent thing for first e -->
            <span class="option">
              <input type="checkbox" class="check" name="ing-beef" id="ing-beef">
              <label for="ing-beef">Beef</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="ing-chx" id="ing-chx">
              <label for="ing-chx">Chicken</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="ing-chx" id="ing-chx">
              <label for="ing-chx">Chicken</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="ing-past" id="ing-past">
              <label for="ing-past">Pasta</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="ing-pork" id="ing-pork">
              <label for="ing-pork">Pork</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="ing-veg" id="ing-veg">
              <label for="ing-veg">Vegetables</label>
            </span>
          </div>
          <div class="category">
            <h4>Cuisine</h4>
            <span class="option">
              <input type="checkbox" class="check" name="cuis-amer" id="cuis-amer">
              <label for="cuis-amer">American</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="cuis-asia" id="cuis-asia">
              <label for="cuis-asia">Asian</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="cuis-ital" id="cuis-ital">
              <label for="cuis-ital">Italian</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="cuis-mex" id="cuis-mex">
              <label for="cuis-mex">Mexican</label>
            </span>
          </div>
          <div class="category">
            <h4>Cook Time</h4>
            <span class="option">
              <input type="checkbox" class="check" name="time-twenty" id="time-twenty">
              <label for="time-twenty">20 Minutes</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="time-thirty" id="time-thirty">
              <label for="time-thirty">30 Minutes</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="time-fortyfive" id="time-fortyfive">
              <label for="time-fortyfive">45 Minutes</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="time-hour" id="time-hour">
              <label for="time-hour">1 Hour</label>
            </span>
          </div>
          <div class="category">
            <h4>Servings</h4>
            <span class="option">
              <input type="checkbox" class="check" name="serv-two" id="serv-two">
              <label for="serv-two">2 servings</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="serv-three" id="serv-three">
              <label for="serv-three">3 servings</label>
            </span>
            <span class="option">
              <input type="checkbox" class="check" name="serv-four" id="serv-four">
              <label for="serv-four">4 servings</label>
            </span>
          </div>
        </div>
      </div> <!-- End filter -->
    </form>
    
    <?php include "includes/_featured.php" ?>
  </main>

<?php require "includes/_footer.php"; ?>