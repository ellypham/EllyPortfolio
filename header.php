<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Roboto+Slab:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/flickity.css" media="screen">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<nav class="animated duration4 slideInDown close hide" id="home">
  <div class="ellyLogo">  
    <img src="<?php bloginfo('template_url') ?>/images/elly_logo_noBG2.png" alt="shape logo">
  </div>
  <div class="fa fa-bars fa-2x"></div>
  <div class="nav">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div>
</nav>

  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <!-- <?php bloginfo( 'name' ); ?> -->
      </a>
    </h1>

    
  </div> <!-- /.container -->
</header><!--/.header-->

