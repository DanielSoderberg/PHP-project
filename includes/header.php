  <header>
      <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
        <h1 class="logo-text">Millhouse</h1>
      </a>
      <i class="fa fa-bars menu-toggle"></i>
      <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php'?>">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="<?php echo BASE_URL . '/views/single.php'?>">Blog</a></li>

        <?php if(isset($_SESSION['id'])):?>
          <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i
          ></a>
          <ul>
            <?php if($_SESSION['admin']): ?>
            <li><a href="<?php echo BASE_URL . '/admin/dashboard.php'?>">Adminview</a></li>
            <?php endif;?>
            <li><a href="<?php echo BASE_URL . '/views/logout.php'?>" class="logout">logout</a></li>
          </ul>
        </li>
<?php else:?>
  <li><a href="<?php echo BASE_URL . '/views/register.php'?>">Sign up</a></li>
  <li><a href="<?php echo BASE_URL . '/views/login.php'?>">Login</a></li> 
<?php endif;?>
       
      </ul>
    </header>