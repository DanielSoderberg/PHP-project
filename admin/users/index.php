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
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/CSS/main.css'?>" />

    <!--admin styling-->
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/CSS/admin.css'?>" />

    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Admin - Manage Users</title>
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
          <h2 class="page-title">Manage Users</h2>
          <?php include(ROOT_PATH . "/includes/messages.php"); ?>

          <table>
            <thead>
              <th>SN</th>
              <th>Username</th>
              <th>Email</th>
              <th>Role</th>
              <th colspan="2">Action</th>
            </thead>
            <tbody>
            <?php foreach($admin_users as $key => $user): ?>
            <tr>
                <td><?php echo $key +1; ?> </td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td>
                <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
              </tr>
            <?php endforeach; ?>
              
                
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
