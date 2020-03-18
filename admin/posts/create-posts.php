<?php include("../../path.php"); ?>
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
    <link rel="stylesheet" href="../../assets/CSS/main.css" />

    <!--admin styling-->
    <link rel="stylesheet" href="../../assets/CSS/admin.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Admin - add Post</title>
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
          <h2 class="page-title">Add posts</h2>
        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>


          <form action="create-posts.php" method="post" enctype="multipart/form-data">
            <div>
              <label>Title</label>
              <input type="text" name="title" value="<?php echo $title ?>" class="text-input" />
            </div>
            <div>
              <label>Body</label>
              <textarea name="body" id="blogeditor"><?php echo $body ?></textarea>
            </div>
            <div>
              <label>Image</label>
              <input type="file" name="image" class="text-input" />
            </div>
            <div>
              <label>Topic</label>
              <select name="topic_id" class="text-input">
                <option value=""></option>
                <?php foreach ($topics as $key => $topic): ?>
                <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php else: ?>
              <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                <?php endif; ?>
              <?php endforeach; ?>
              </select>
            </div>
            <div>
            <?php if(empty($published)): ?>
              <label><input type="checkbox" name="published">Publish</label>
            <?php else: ?>
              <label><input type="checkbox" name="published" checked>Publish</label>

            <?php endif; ?>

            </div>
             <div>
              <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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
