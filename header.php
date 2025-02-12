<?php
session_start();
?>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">

        <h1 class="sitename">LUXE<span>STAY</span></h1>
      </a>
      <form>
      <nav id="navmenu" class="navmenu">
        <ul>
          
          <li><a href="index.php">Home</a></li>
          <li><a href="properties.php">Properties</a></li>
          <li><a href="agents.php">Agents</a></li>
          <li><a href="about.php" >About</a></li>  
          <li><a href="logout.php" style="color: red !important">Logout</a></li>
          <?php if ($_SESSION['urole'] == "admin"): ?>
            <li><a href="dashboard.php">Dashboard</a></li>
          <?php endif; ?>
    </form>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i> 
        <!-- d-xl-none makes the hamburger icon disappear when the screen is large
          bi bi-list creates a hamburger icon for nav bar on small screens(bootsrap property)
         bi bi-X is  bootstrap icon X  -->
      </nav>
      </div>
  </header>
