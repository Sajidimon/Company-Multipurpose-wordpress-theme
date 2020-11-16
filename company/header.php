<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <?php wp_head(); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <?php 
          if(has_custom_logo()){
              the_custom_logo();
          }
      ?>

      <nav class="nav-menu d-none d-lg-block">

          <?php 
            $navigation =  wp_nav_menu(
                array(
                  'theme_location'      =>'top-menu',
                  'fallback_cb'         =>'add menu here',
                  'container'           =>'',
                  'menu_class'          =>'',
                  'menu_id'             =>'',
                  'echo'                =>false

                )
              );

              $navigation = str_replace('menu-item-has-children', 'menu-item-has-children drop-down', $navigation);
              $navigation = str_replace('current-menu-item', 'current-menu-item active', $navigation);
              echo $navigation;

          ?>

      </nav><!-- .nav-menu -->

      <div class="header-social-links">

      <?php if(get_theme_mod('company_tw_icon')): ?>
        <a href="<?php echo esc_url(get_theme_mod('company_tw_icon')); ?>" class="twitter"><i class="icofont-twitter"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('company_fb_icon')): ?>
        <a href="<?php echo esc_url(get_theme_mod('company_fb_icon')); ?>" class="facebook"><i class="icofont-facebook"></i></a>
        <?php endif; ?>

        <?php if(get_theme_mod('company_ins_icon')): ?>
        <a href="<?php echo esc_url(get_theme_mod('company_ins_icon')); ?>" class="instagram"><i class="icofont-instagram"></i></a>
        <?php endif; ?>
        
        <?php if(get_theme_mod('company_ln_icon')): ?>
        <a href="<?php echo esc_url(get_theme_mod('company_ln_icon')); ?>" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        <?php endif; ?>

      </div>

    </div>
  </header><!-- End Header -->