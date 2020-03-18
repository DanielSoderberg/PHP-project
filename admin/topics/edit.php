<?php include( "../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); ?>


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

    <title>Admin - add Topics</title>
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
          <a href="create-topics.php" class="btn btn-big">Add Topic</a>
          <a href="index.php" class="btn btn-big">Manage Topics</a>
        </div>
        <div class="content">
          <h2 class="page-title">Edit topic</h2>
            <!--Included link to errors-->
          <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

          <form action="edit.php" method="post"> <!--Kolla topics-->
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <div>
              <label>Name</label>
              <input type="text" name="name" value="<?php echo $name; ?>" class="text-input" />
            </div>
            <div>
              <label>Description</label>
              <textarea name="description" id="blogeditor"><?php echo $description; ?>"</textarea>
            </div>

            <div>
              <button type="submit" name="update-topic" class="btn btn-big">Update Topic</button>
            </div>
          </form>
        </div>
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
