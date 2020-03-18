<?php include("path.php");
/* include(ROOT_PATH . "/app/DB/dbh.php");  */
include(ROOT_PATH . "/app/controllers/topics.php"); 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link rel="stylesheet" href="assets/CSS/main.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Fredoka+One|Rajdhani&display=swap"
      rel="stylesheet"
    />

    <title>Blog</title>
  </head>
  <body>

<!--Included link to header-->
<?php include(ROOT_PATH . "/includes/header.php"); ?>

<?php include(ROOT_PATH . "/includes/messages.php"); ?>
 

    <!--Wrapper-->
    <div class="page-wrapper">
      <!--post slider-->
      <div class="post-slider">
        <h1 class="slider-title">Trending posts</h1>
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>

        <div class="post-wrapper">
          <div class="post">
            <img
              src="assets/images/sunglasses-sunset.jpg"
              alt="sunglasses"
              class="slider-image"
            />
            <div class="post-info">
              <h4><a href="#">Gosh, got to get those glasses!</a></h4>
              <i class="far fa-user"> Daniel S</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 15, 2020</i>
            </div>
          </div>
          <div class="post">
            <img
              src="assets/images/sunglasses-sunset.jpg"
              alt="sunglasses"
              class="slider-image"
            />
            <div class="post-info">
              <h4><a href="#">Gosh, got to get those glasses!</a></h4>
              <i class="far fa-user"> Daniel S</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 15, 2020</i>
            </div>
          </div>
          <div class="post">
            <img
              src="assets/images/sunglasses-sunset.jpg"
              alt="sunglasses"
              class="slider-image"
            />
            <div class="post-info">
              <h4><a href="#">Gosh, got to get those glasses!</a></h4>
              <i class="far fa-user"> Daniel S</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 15, 2020</i>
            </div>
          </div>
          <div class="post">
            <img
              src="assets/images/sunglasses-sunset.jpg"
              alt="sunglasses"
              class="slider-image"
            />
            <div class="post-info">
              <h4><a href="#">Gosh, got to get those glasses!</a></h4>
              <i class="far fa-user"> Daniel S</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 15, 2020</i>
            </div>
          </div>
          <div class="post">
            <img
              src="assets/images/sunglasses-sunset.jpg"
              alt="sunglasses"
              class="slider-image"
            />
            <div class="post-info">
              <h4><a href="single.html">Gosh, got to get those glasses!</a></h4>
              <i class="far fa-user"> Daniel S</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 15, 2020</i>
            </div>
          </div>
        </div>
        8
      </div>
      <!--end post slider-->

      <!--content-->
      <div class="content clearfix">
        <!--Main content-->
        <div class="main-content">
          <h1 class="recent-post-title">Recent Posts</h1>

          <div class="post clearfix">
            <img src="assets/images/klocka2.jpg" alt="A watch" class="post-image" />
            <div class="post-preview">
              <h2><a href="single.html">Watch, what a wonderful watch!</a></h2>
              <i class="far fa-user"> Mats Ohlsson</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 16, 2020</i>
              <br />
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Distinctio blanditiis minus, qui eaque aperiam necessitatibus.
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/images/klocka2.jpg" alt="A watch" class="post-image" />
            <div class="post-preview">
              <h2><a href="single.html">Watch, what a wonderful watch!</a></h2>
              <i class="far fa-user"> Mats Ohlsson</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 16, 2020</i>
              <br />
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Distinctio blanditiis minus, qui eaque aperiam necessitatibus.
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/images/klocka2.jpg" alt="A watch" class="post-image" />
            <div class="post-preview">
              <h2><a href="single.html">Watch, what a wonderful watch!</a></h2>
              <i class="far fa-user"> Mats Ohlsson</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 16, 2020</i>
              <br />
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Distinctio blanditiis minus, qui eaque aperiam necessitatibus.
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>

          <div class="post clearfix">
            <img src="assets/images/klocka2.jpg" alt="A watch" class="post-image" />
            <div class="post-preview">
              <h2><a href="single.html">Watch, what a wonderful watch!</a></h2>
              <i class="far fa-user"> Mats Ohlsson</i>
              &nbsp;
              <i class="far fa-calendar"> Mar 16, 2020</i>
              <br />
              <p class="preview-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Distinctio blanditiis minus, qui eaque aperiam necessitatibus.
              </p>
              <a href="single.html" class="btn read-more">Read more</a>
            </div>
          </div>
        </div>

        <!--sidebar-->
        <div class="sidebar">
          <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.html" method="POST">
              <input
                type="text"
                name="search-term"
                class="text-input"
                placeholder="search..."
              />
            </form>
          </div>

          <div class="section topics">
            <h2 class="section-title">Our products</h2>
            <ul>

            <?php foreach($topics as $key => $topic): ?>
            <li><a href="#"><?php echo $topic['name']; ?> </a></li> 
            <?php endforeach; ?>
              



              <!-- <li><a href="#">Sunglasses</a></li>
              <li><a href="#">Gadgets</a></li>
              <li><a href="#">Interior</a></li>
              <li><a href="#">Trendy shit</a></li>
              <li><a href="#">Exclusive stuff</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>

<!--Included link to footer-->
<?php include(ROOT_PATH . "/includes/footer.php"); ?>

  

    <!--JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Slick carousel-->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <!--custom script-->
    <script src="assets/JS/scripts.js"></script>
  </body>
</html>
