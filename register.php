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
    <title>Login Page</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
  </head>
    <body>
      <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
          <form class="uk-form-stacked js-login">
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Email</label>
                <div class="uk-form-controls">
                    <input class="uk-input" required="required" type="email" placeholder="Your email">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-text">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" required="required" type="password" placeholder="Your password">
                </div>
            </div>
            <div class="uk-margin">
                <button class="uk-button uk-button default" type="submit">Log In</button>
            </div>
          </form>
        </div>
      </div>

      <?php require_once "include/footer.php"; ?>
  </body>
</html>