<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link rel="stylesheet" href="../assets/CSS/main.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Login</title>
  </head>

  <body>
   
   
   <!--Included link to header-->
<?php include(ROOT_PATH . "/includes/header.php"); ?>



<!--Login form -->
    <div class="auth-content">
      <form action="login.php" method="post">
        <h2 class="form-title">Login</h2>
        <div>
         <!--Included link to errors-->
<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

          <label>Username</label>
          <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" />
        </div>
        <div>
          <label>Password</label>
          <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" />
        </div>
        <div>
         
          <button type="submit" name="login-btn" class="btn btn-big">
            Login
          </button>
        </div>
        <p>Or <a href="<?php echo BASE_URL . '/views/register.php'?>">Sign Up</a></p>
      </form>
    </div>

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--custom script-->
    <script src="../assets/JS/scripts.js"></script>
  </body>
</html>
