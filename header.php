<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?> style="background-image: url('<?php echo get_theme_file_uri('/images/backbroung_welcome_section.jpg') ?>');">



<nav class="navbar" aria-label="First navbar example" style="background-color: white;">
      <div class="container-fluid">
          <div class="header_logo">
             <a href="<?php echo bloginfo('url'); ?>">
             <!-- <img src="<?php echo get_theme_file_uri('/images/logo.png')?>" /> -->
             <?php 
             $custom_logo_id = get_theme_mod( 'custom_logo' );
             $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
             echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
             ?>
             </a>
          </div>
          <span class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarsExample01"
              aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa-sharp fa-solid fa-grip-lines"></i>
          </span>

          <div class="collapse navbar-collapse" id="navbarsExample01">
              <!-- <ul class="navbar-nav me-auto mb-2" style="">
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url() ?>">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('/about-us') ?>">About Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">FAQ</a>
                  </li>
                  <li class="">
                      <div class="dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Services
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="position: absolute; background-color:black">
                              <li><a class="dropdown-item" href="#">Metarnity</a></li>
                              <li><a class="dropdown-item" href="#">New Born</a></li>
                              <li><a class="dropdown-item" href="#">Indoor</a></li>
                              <li><a class="dropdown-item" href="#">Outdoor</a></li>
                          </ul>
                      </div>
</li>
</ul>-->

<?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            </div>
      </div>
  </nav>