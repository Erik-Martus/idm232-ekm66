<?php
  require_once "../includes/_global.php";
  require_once "../includes/_db.php";

  $search_result = isset($_GET["search"]) ? $_GET["search"] : null;

  $title .= " | Admin";

  require_once "includes/_head.php";
?>

<main>
<nav>
  <?php include "includes/_add-btn.php" ?>
</nav>
  <?php 
    if (isset($_GET["search"])) {
      ?>
        <a href="index.php">
          <div id="back">
            <svg fill="#252525" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" version="1.1" x="0px" y="0px">
              <title>Download s7.3</title>
              <desc>Created with Sketch.</desc>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="matrix(0, 1, -1, 0, 100, -0.000002)">
                <g>
                  <path d="M51.7178475,34.7325339 C50.7492396,33.7515421 49.1791725,33.7554855 48.2059335,34.7465054 L36.6209567,46.5431361 C34.7387258,48.4292911 37.5610742,51.2575234 39.4433051,49.3713685 L47.3035824,41.4879656 C47.6904965,41.0999131 48.0041524,41.2361568 48.0041524,41.7864666 L48.0041524,63.5365625 C48.0041524,64.6438549 48.890108,65.5414928 50.0001555,65.5414928 L50.0001555,65.5414928 C51.1025176,65.5414928 51.9961586,64.6457827 51.9961586,63.5365625 L51.9961586,41.7864666 C51.9961586,41.2335566 52.3109966,41.1010987 52.6967286,41.4879656 L60.5570059,49.3713685 C62.4382388,51.2575234 65.2615852,48.4292911 63.3793543,46.5431361 L51.7178475,34.7325339 Z" fill="#252525" transform="translate(50.000093, 49.770746) rotate(-180.000000) translate(-50.000093, -49.770746) "></path>
                  <circle stroke="#252525" stroke-width="4" transform="translate(50.000000, 50.000000) rotate(-180.000000) translate(-50.000000, -50.000000) " cx="50" cy="50" r="30"></circle>
                </g>
              </g>
            </svg>
            <p>Back</p>
          </div>
        </a>
      <?php
    }
  ?>
  <h2>
    <?php
      if (isset($_GET["search"])) {
        echo ucfirst($_GET["search"]);
      } else {
        echo "Edit a Recipe";
      }
    ?>
  </h2>
  <section id="recipes">
  <?php 
        $search_result_orig = $search_result;
        $search_result = mysqli_real_escape_string($connection, $search_result);
  
        if ($search_result !== null) {
          $query = "SELECT `id`, `title` ";
          $query .= "FROM `recipes` ";
          $query .= "WHERE (`title` LIKE '%{$search_result}%' ";
          $query .= "OR `side` LIKE '%{$search_result}%' ";
          $query .= "OR `description` LIKE '%{$search_result}%' ";
          $query .= "OR `ingredients` LIKE '%{$search_result}%' ";
          $query .= "OR `steps` LIKE '%{$search_result}%' ";
          $query .= "OR `tags` LIKE '%{$search_result}%' ";
          $query .= ")";
          $query .= "ORDER by `id` ASC";
        }

        $result = mysqli_query($connection, $query);
    
        if (!$result) {
          die("Database connection failed.");
        }
        elseif (mysqli_num_rows($result) == 0) {
          print_r("No results");
        }
        else {
          while($recipe = mysqli_fetch_assoc($result)) {
            ?>
            <div class="rec_item">
              <p class="rec_id"><?php echo $recipe["id"] ?></p>
              <p class="rec_title"><?php echo $recipe["title"] ?></p>
              <a href="<?php 
                $rec_url = rawurldecode("recipe.php");
                $rec_url .= "?" . "id=" . urldecode($recipe["id"]);
                echo htmlspecialchars($rec_url); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                    <g>
                      <g transform="translate(50 50) scale(0.69 0.69) rotate(0) translate(-50 -50)" style="fill:#252525">
                        <svg fill="#252525" xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" version="1.1" x="0px" y="0px">
                          <path fill="#252525" d="M295.384615 708.923077h433.23077a19.692308 19.692308 0 1 1 0 39.384615h-433.23077a19.692308 19.692308 0 1 1 0-39.384615zM590.769231 303.576615L618.653538 275.692308l72.979693 73.019077-27.844923 27.844923L590.769231 303.576615z m-236.307693 196.923077L382.345846 472.615385l89.284923 89.324307-27.844923 27.844923L354.461538 500.499692zM401.329231 616.841846l308.342154-308.342154-55.689847-55.689846-308.381538 308.342154-8.152615 63.881846 63.881846-8.192z m-93.065846-74.043077l317.833846-317.833846a39.384615 39.384615 0 0 1 55.729231 0l55.689846 55.689846a39.384615 39.384615 0 0 1 0 55.689846l-317.833846 317.833847-127.763693 16.344615 16.344616-127.724308z"></path>
                        </svg>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
            <?php
          } // End while loop
        }
      ?>
  </section>
</main>

<?php
  
?>