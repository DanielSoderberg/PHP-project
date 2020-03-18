<?php

?>
  <header>
      <a href="<?php echo BASE_URL . '/index.php'?>" class="logo">
        <h1 class="logo-text">Millhouse</h1>
      </div>
      <i class="fa fa-bars menu-toggle"></i>
      <ul class="nav">
      <?php if (isset($_SESSION['username'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i
          ></a>
          <ul>
            <li><a href="<?php echo BASE_URL . '/views/logout.php' ;?> " class="logout">Logout</a></li>
          <?php endif; ?>
          </ul>
        </li>
      </ul>
    </header>