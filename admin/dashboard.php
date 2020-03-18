<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); ?>


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
    <link rel="stylesheet" href="../assets/CSS/main.css" />

    <!--admin styling-->
    <link rel="stylesheet" href="../assets/CSS/admin.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Admin - Dashboard</title>
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
        
        <div class="content">
          <h2 class="page-title">Dashboard</h2>
        <?php include(ROOT_PATH . "/includes/messages.php"); ?>



    </div>

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js"></script>

    <!--custom script-->
    <script src="../assets/JS/scripts.js"></script>
  </body>
</html>
