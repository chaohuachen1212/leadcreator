<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
  <?php $body_class = esc_attr(isset($args['body_class']) && is_string($args['body_class']) && strlen($args['body_class']) > 0 ? $args['body_class'] : ''); ?>
  <body class="<?php echo $body_class; ?>">


    <header role="navigation">
      <div class="container">
        <div class="row">
          <a class="logo" href="">
            <span>C&H Website</span>
          </a>

          <a class="btn inverse" href="">Contact</a>
        </div>
      </div>
    </header>


    <div class="max-container">
