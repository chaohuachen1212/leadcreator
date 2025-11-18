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


<?php
       $showEyebrow = get_field('show_eyebrow', 'option');
       $eyebrowIcon = get_field('eyebrow_icon', 'option');
       $eyebrowColorText = get_field('eyebrow_color_text', 'option');
       $eyebrowHeadline = get_field('eyebrow_headline', 'option');
       $eyebrowHeadlineMobile = get_field('eyebrow_headline_mobile', 'option');
       $eyebrowLinkUrl = get_field('eyebrow_link_url', 'option');
       $eyebrowLinkText = get_field('eyebrow_link_text', 'option');
     ?>

<?php if(!empty($showEyebrow)): ?>
      <div class="eyebrow max-container relative">
        <div class="alert-banner-content">

          <?php if(!empty($eyebrowIcon)): ?>
            <div class="eyebrow__icon">
              <img src="<?php echo esc_attr($eyebrowIcon)?>" alt="">
            </div>
          <?php endif; ?>

          <div class="eyebrow__text-container">

            <p class="eyebrow__heading">
              
              <?php if(!empty($eyebrowColorText)): ?>
                <span class="eyebrow__color-text"><?php echo esc_html($eyebrowColorText); ?></span>
              <?php endif; ?>

              <span class="desktop-only"><?php echo wp_kses_post($eyebrowHeadline); ?></span>
              <span class="mobile-only"><?php echo wp_kses_post($eyebrowHeadlineMobile); ?></span>

              <a class="eyebrow__copy" href="<?php echo esc_url($eyebrowLinkUrl); ?>">
                <?php echo esc_html($eyebrowLinkText); ?>
                <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.496 4.35355C12.6913 4.15829 12.6913 3.84171 12.496 3.64645L9.31404 0.464466C9.11878 0.269204 8.80219 0.269204 8.60693 0.464466C8.41167 0.659728 8.41167 0.976311 8.60693 1.17157L11.4354 4L8.60693 6.82843C8.41167 7.02369 8.41167 7.34027 8.60693 7.53553C8.80219 7.7308 9.11878 7.7308 9.31404 7.53553L12.496 4.35355ZM0 4.5H12.1425V3.5H0V4.5Z" fill="white"/>
                </svg>
              </a>

            </p>

          </div>

          <div class="close-eyebrow absolute">
            <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <line x1="6.80553" y1="5.74095" x2="15.4444" y2="14.3799" stroke="white" stroke-width="0.927697"/>
              <line x1="6.55604" y1="14.3799" x2="15.195" y2="5.74095" stroke="white" stroke-width="0.927697"/>
              <circle cx="11.0002" cy="10.3884" r="9.92456" stroke="white" stroke-width="0.927697"/>
            </svg>
          </div>

        </div>
      </div>
    <?php endif; ?>

    <header role="navigation" id="header">
      <div class="container">
        <div class="row">
          <a class="logo" href="/">
            <span>C&H Web</span>
          </a>

          <a class="btn inverse" href="#contact">Contact</a>
        </div>
      </div>
    </header>


    <div class="max-container">
