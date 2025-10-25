<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/brand/logo-new.webp" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
  <?php $body_class = esc_attr(isset($args['body_class']) && is_string($args['body_class']) && strlen($args['body_class']) > 0 ? $args['body_class'] : ''); ?>
  <body class="<?php echo $body_class; ?>">


    <header role="navigation" class="header">
      <div class="container flex j-sb a-c wrap">
        <div class="logo-wrap">
          <a class="logo" href="<?php echo esc_url(get_home_url()); ?>">
            <img src="<?php echo GET_URI . '/img/brand/logo-new.webp'; ?>" alt="Logo">
          </a>
          <div class="hamburger">
                <span></span>
          </div>
        </div>
        <nav>
          <a class="nav-item" href="/berkeley-rental/">Berkeley Rental</a>
          <a class="nav-item" href="/">South Bay</a>
          <a class="nav-item" href="/"> East Bay</a>
        </nav>
      </div>
    </header>


    <div class="max-container">
