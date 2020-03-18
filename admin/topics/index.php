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
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/CSS/main.css'?>" />

    <!--admin styling-->
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/CSS/admin.css'?>" />

    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Admin - Manage Topics</title>
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
          <h2 class="page-title">Manage topics</h2>
          <?php include(ROOT_PATH . "/includes/messages.php"); ?>

          
          <table>
            <thead>
              <th>ID</th>
              <th>Product</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php foreach($topics as $key =>$topic): ?>
              <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $topic['name']; ?></td>
                <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">edit</a></td>
                <td><a href="#" class="delete">delete</a></td>
              </tr>
            <?php endforeach; ?>
              <tr>
                <td>2</td>
                <td>Cool watch</td>
                <td>Titan for the toughest</td>
                <td><a href="#" class="edit">edit</a></td>
                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">delete</a></td>
              </tr>
            </tbody>
          </table>
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
