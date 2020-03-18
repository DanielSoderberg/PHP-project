<?php include( "../../path.php"); ?>
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
    <!--custom styling-->
    <link rel="stylesheet" href="../../assets/CSS/main.css" />

    <!--admin styling-->
    <link rel="stylesheet" href="../../assets/CSS/admin.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Admin - add Users</title>
  </head>

  <body>
    <!--Header admin-->
  <?php include(ROOT_PATH . "/includes/adminHeader.php"); ?>


    <!--Wrapper-->
    <div class="admin-wrapper">

      <!--Left sidebar-->
      <?php include(ROOT_PATH . "/includes/adminSidebar.php"); ?>
 

      <!--Admin content-->
       <div class="admin-content">
            <div class="button-group">
                <a href="create-users.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>
            <div class="content">

                <h2 class="page-title">Add User</h2>
                 <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                
                <form action="create-users.php" method="post">
        <label>Username</label>
        <div>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" />
        </div>
        <div>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>" class="text-input" />
</div>
<div>
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" />
</div>
<div>
    <label>Password Confirmation</label>
    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input" />
</div>
<div>
<?php if (isset($admin) &&  $admin == 1): ?>
<label>
    <input type="checkbox" name="admin" checked>
    Admin
    </label>
<?php else: ?>
<label>
    <input type="checkbox" name="admin">
    Admin
    </label>
<?php endif; ?>
 
</div>

   <div>
   <button type="submit" name="create-admin" class="btn btn-big">Add User</button>
     </div>
            </form>
        </div>



    </div>

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

    <!--custom script-->
    <script src="../../assets/JS/scripts.js"></script>
  </body>
</html>
