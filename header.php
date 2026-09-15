<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1B4332">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="site-header">
  <div class="site-branding">
    <a href="<?php echo esc_url( home_url('/') ); ?>">
      <?php
      if ( has_custom_logo() ) {
          the_custom_logo();
      } else {
          echo '<span class="logo-leaf">🌿</span> ';
          bloginfo('name');
      }
      ?>
    </a>
  </div>

  <button class="menu-toggle" aria-label="Åbn menu" aria-expanded="false">
    <span></span><span></span><span></span>
  </button>

  <nav class="main-navigation">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => false,
    ) );
    ?>
  </nav>

  <div class="header-actions">
    <a href="#kontakt" class="btn-akut">🌿 Bestil plantning</a>
  </div>
</header>
