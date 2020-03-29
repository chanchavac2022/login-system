<?php 
  define("__CONFIG__", true);
  require_once "include/config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X.UA.Compatible" content="IE=edge">
    <meta name="robots" content="follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">       
    <title>Home Page</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
  </head>
  <body>
    <div class="uk-section uk-container">
      <a href="login.php">Log in</a>
      <a href="register.php">Register</a>
    </div>

    <?php require_once "include/footer.php"; ?>
  </body>
</html>