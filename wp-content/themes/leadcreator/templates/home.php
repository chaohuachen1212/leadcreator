<?php
  // Template Name: Home
  get_header(null, ['body_class' => 'page-home sticky-nav']);

    $homeImage = get_field('home_image');
    $homeTitle = get_field('home_title');
?>

<section class="home--main-content">
  <div class="content">
    <h1><?php echo wp_kses_post($homeTitle); ?></h1>
  </div>
  <img src="<?php echo esc_url($homeImage['url']) ?>" alt="<?php echo esc_attr($homeImage['alt']) ?>">
</section>

<?php get_footer(); ?>
