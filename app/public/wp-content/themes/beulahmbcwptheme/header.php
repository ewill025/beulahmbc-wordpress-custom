<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
    <title>Welcome | Beulah Missionary Baptist Church</title>
</head>
<body>
    
<header class="site-header">
<nav class="navbar navbar-expand-lg navbar-light bg-faded">
  <a class="navbar-brand" href="#">
  <img  class="img-fluid" src="<?php echo get_template_directory_uri() . "/img/bmbc.png" ?>" width="350" height="350" alt="" loading="lazy">

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  nav-fill w-100">
      <?php 
           wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_id' => 'navbarSupportedContent',
                'container_class' => 'collapse navbar-collapse',
                'menu_class' => 'navbar-nav nav-fill w-100',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker(),
            ));
        ?>
    </ul>
  </div>
  
</nav><!-- Nav Bar -->
</header>