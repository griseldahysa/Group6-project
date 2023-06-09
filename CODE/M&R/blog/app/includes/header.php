<header>
    <a href="<?php echo BASE_URL . '/main/main.php' ?>" class="logo">
      <h1 class="logo-text"><span>Follow</span>Diet</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/main/main.php' ?>">Home</a></li>
      <!-- <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li> -->
      <li>
        <a href="">Our diets</a>
        <ul>
              <li><a href="<?php echo BASE_URL . '/main/diets/mediterranean.php' ?>">Mediterranean</a></li>
              <li><a href="<?php echo BASE_URL . '/main/diets/dash.php' ?>">Dash</a></li>
              <li><a href="<?php echo BASE_URL . '/main/diets/paleo.php' ?>">Paleo</a></li>
              <li><a href="<?php echo BASE_URL . '/main/diets/low-carb.php' ?>"a>Low Carb</a></li>
              <li><a href="<?php echo BASE_URL . '/main/diets/vegetarian.php' ?>">Vegetarian</a></li>
        </ul>
      </li>
      <li><a href="#">Calculate</a>
      <ul>
              <li><a href="">BMI</a></li>
							<li><a href="">Calories</a></li>
        </ul>
      </li>

      <?php if (isset($_SESSION['id'])): ?>
        <li>
          <a href="#">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
          </a>
          <ul>
            <?php if($_SESSION['admin']): ?>
              <li><a href="<?php echo BASE_URL . '/blog/admin/dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/blog/logout.php' ?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL . '/blog/register.php' ?>">Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/blog/login.php' ?>">Login</a></li>
      <?php endif; ?>
    </ul>
</header>