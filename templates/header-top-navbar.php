<header id="banner" class="navbar" role="banner">
  <?php roots_header_inside(); ?>
  <div class="navbar-inner">
    <div class="<?php echo WRAP_CLASSES; ?>">
      <!-- mobile nav bar -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <!-- logo -->
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <!-- main navigation -->
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker(), 'menu_class' => 'nav')); ?>
      </nav>
    </div>
  </div>

  <!-- Sample Hero Unit -->

  <!-- <div class="hero-unit">
    <h1>This Is Hero!</h1>
    <p>Some sub text goes in here...</p>
  </div> -->

  <!-- Sample Carousel -->

  <!-- <div id="main-corousel" class="carousel slide">

    <div class="carousel-inner">
      <div class="active item"><img src="#" alt="img 1"></div>
      <div class="item"><img src="#" alt="img 2"></div>
      <div class="item"><img src="#" alt="img 3"></div>
    </div>

    <a class="carousel-control left" href="#main-corousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#main-corousel" data-slide="next">&rsaquo;</a>
  </div>  -->

</header>