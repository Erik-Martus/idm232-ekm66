<?php

$host = $_SERVER['HTTP_HOST'];
if ($host == 'localhost') {
  // Local database credentials
  define('DB_SERVER', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'idm232-home_chef');
}
else {
  // Remote database credentials
  define('DB_SERVER', 'www.erikmartus.com');
  define('DB_USER', 'erikmart_idm232');
  define('DB_PASS', '1JZTL~77-Wk7');
  define('DB_NAME', 'erikmart_idm232');
}

  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

  if (mysqli_connect_errno()) {
    die('Database connection failed: ' . mysqli_connect_error() . ' ' . mysqli_connect_errno());
  }
?>