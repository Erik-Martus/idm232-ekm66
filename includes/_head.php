<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- ------------ CSS ------------ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Typkit Fonts -->
  <link rel="stylesheet" href="https://use.typekit.net/qzq6gzd.css">
  <link rel="stylesheet" href="css/main.css">

  <style>
    #hero {
      background-color: #fff;
      background-image: url(img/hero/couple_cooking.jpg);
      background-position: 50% 50%;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>

  <script src="js/jquery-3.4.1.min.js"></script>

  <title>Home Chef</title>

</head>
<body>

<header class="navigation">
  <div class="nav-container">
    <div class="brand">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152 65">
      <g id="hc-logo-svg">
        <g id="hc-logo-home">
          <path fill="#CC0033" d="M9.5,5.9h5.7l-0.9,2.3l-1.8,13.2l0.4,0.5h3.5l0.6-0.5l1.8-13.2l-0.2-2.3h5.7l-0.9,2.3l-4.5,32l0.3,2.2h-5.7 l0.8-2.2L16.2,27l-0.4-0.5h-3.5L11.6,27L9.8,40.2l0.3,2.2H4.4l0.9-2.2l4.5-32L9.5,5.9z"/>
          <path fill="#CC0033" d="M40.7,8.2l-4.5,32l-2.6,2.3h-9.1l-2-2.3l4.5-32l2.6-2.3h9.1L40.7,8.2z M35.3,10.5h-3.5l-0.6,0.5l-3.7,26.3 l0.4,0.5h3.5l0.6-0.5l3.7-26.3L35.3,10.5z"/>
          <path fill="#CC0033" d="M52.8,30.5h-2.3l-3-12.4l-3.1,22.2l0.3,2.2H39l0.9-2.2l4.5-32l-0.2-2.3h5.1l3.8,15l8-15h5.1l-0.9,2.3l-4.5,32 l0.3,2.2h-5.7l0.9-2.2L59.3,18L52.8,30.5z"/>
          <path fill="#CC0033" d="M63.8,42.4l0.9-2.3l4.5-32l-0.2-2.2h13.7l0.1,5l-2.3-0.5h-6.5L73.3,11l-1.4,10.4l0.4,0.5h1.8l2.4-0.6L75.6,27l-2.2-0.6h-1.8L71,26.9l-1.4,10.3l0.4,0.5h6.5l2.4-0.5l-1.5,5.1H63.8z"/>
        </g>
        <g id="hc-logo-chef">
          <path fill="#CC0033" d="M80.5,58.1l4.5-32l2.6-2.3h9.1l1.9,2.3l-0.6,4.6l0.2,2.2h-5.7l1-2.2l0.2-1.8l-0.4-0.5h-3.6L89.2,29l-3.7,26.3l0.4,0.5h3.6l0.6-0.5l0.2-1.8L90,51.3h5.7l-0.9,2.2l-0.6,4.7l-2.6,2.3h-9.1L80.5,58.1z"/>
          <path fill="#CC0033" d="M102.2,23.9h5.7l-0.9,2.3l-1.8,13.2l0.4,0.5h3.5l0.6-0.5l1.8-13.2l-0.2-2.3h5.7l-0.9,2.3l-4.5,32l0.3,2.2 h-5.7l0.8-2.2l1.9-13.2l-0.4-0.5H105l-0.6,0.5l-1.9,13.2l0.3,2.2h-5.7l0.9-2.2l4.5-32L102.2,23.9z"/>
          <path fill="#CC0033" d="M114.7,60.4l0.9-2.3l4.5-32l-0.2-2.2h13.7l0.1,5l-2.3-0.5h-6.5l-0.6,0.5l-1.4,10.4l0.4,0.5h1.8l2.4-0.6 l-0.8,5.7l-2.2-0.6h-1.8l-0.6,0.5l-1.4,10.3l0.4,0.5h6.5l2.4-0.5l-1.5,5.1H114.7z"/>
          <path fill="#CC0033" d="M136.2,23.9h13.7l0.1,5l-2.3-0.5h-6.5l-0.6,0.5l-1.4,10.4l0.4,0.5h1.8l2.3-0.6l-0.8,5.7l-2.1-0.6H139 l-0.6,0.5l-1.8,13.2l0.2,2.3h-5.7l0.9-2.3l4.5-32L136.2,23.9z"/>
        </g>
      </g>
    </svg>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <form action="">
            <label for="search">Search</label>
            <input type="search" name="search" id="search">
          </form>
        </li>
        <li>
          <a href="#!">About</a>
        </li>
        <li>
          <a href="#!">Services</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Pricing</a>
        </li>
        <li>
          <a href="#!">Portfolio</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
