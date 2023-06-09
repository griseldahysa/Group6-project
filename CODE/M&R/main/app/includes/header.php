
<header>
    <a href="../../../../Food-Delivery/index.php" class="logo">
    <i class="fa-duotone fa-apple-whole" style="--fa-primary-color: #28d79d; --fa-secondary-color: #28d79d;"></i>
      <h1 class="logo-text"><span>Go</span>Fastico</h1>
    </a>
    <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="<?php echo BASE_URL . '/main/main.php' ?>">Home</a></li>
      <li><a href="#blogg">Blog</a></li>
      <!-- <li><a href="main.php">Home</a></li> -->
      <li>
        <a href="">Our diets</a>
        <ul>
              <li><a href="<?php echo BASE_URL . '/main/diets/mediterranean.php' ?>">Mediterranean</a></li>
							<li><a href="<?php echo BASE_URL . '/main/diets/dash.php' ?>">Dash</a></li>
							<li><a href="<?php echo BASE_URL . '/main/diets/paleo.php' ?>">Paleo</a></li>
							<li><a href="<?php echo BASE_URL . '/main/diets/low-carb.php' ?>">Low Carb</a></li>
							<li><a href="<?php echo BASE_URL . '/main/diets/vegetarian.php' ?>">Vegetarian</a></li>
        </ul>
      </li>
      <li><a href="">Calculate</a>
      <ul>
              <li><a href="#bmi">BMI</a></li>
							<li><a href="#calories">Calories</a></li>
        </ul>
      </li>

      <!-- <li><a href="../../../blog/index.php">Our Blog</a></li>  -->

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