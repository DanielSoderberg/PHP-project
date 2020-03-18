<?php include( "../../path.php"); ?>
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
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/CSS/main.css'?>" />

    <!--admin styling-->
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/CSS/admin.css'?>" />

    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Admin - Manage Posts</title>
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
          <a href="create-posts.php" class="btn btn-big">Add Post</a>
          <a href="index.php" class="btn btn-big">Manage Posts</a>
        </div>

        <div class="content">
          <h2 class="page-title">Manage posts</h2>
          <?php include(ROOT_PATH . "/includes/messages.php"); ?>

          <table>
            <thead>
              <th>SN</th>
              <th>Title</th>
              <th>Author</th>
              <th colspan="3">Action</th>
            </thead>
              <tbody>
            <?php foreach ($posts as $key => $post): ?>
            <tr>            
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $post['title'] ?></td>
                <td>Daniel</td>
                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                
                <?php if ($post['published']): ?>
                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                <?php else: ?>
                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                <?php endif; ?>
              </tr>
                <?php endforeach; ?>
                           
            </tbody>
          </table>
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
