<?php
  // Template Name: Rental Details
  get_header(null, ['body_class' => 'page-rental-details']);

    $googleApiKey = get_field('google_api_key', 'option');

      $lat = get_field('latitude'); 
      $lng = get_field('longitude');

      $title = get_the_title() ?: 'Location';
      $pin_uri = get_theme_file_uri('img/ui/map-pin.svg');
      
?>

<section class="rental-details--hero">
  <div class="container">
    <h1><?php the_field('hero_title'); ?></h1>
  </div>
  <img src="<?php the_field('hero_image'); ?>" alt="Image">
</section>

<section class="rental-details--content">
  <div class="container">
    <div class="intro">
      <?php the_field('intro_copy'); ?>
    </div>

    <div class="rdc--map">
      <div  
            id="gmap"
            class="gmap"
            data-lat="<?= esc_attr($lat); ?>"
            data-lng="<?= esc_attr($lng); ?>"
            data-title="<?= esc_attr($title); ?>"
            aria-label="<?= esc_attr('Map showing ' . $title); ?>"
            role="region"
          ></div>
    </div>


    <div class="available-block">
      <h2><?php the_field('available_title'); ?></h2> 

      <div class="grid">
        <?php
          if( have_rows('available_cards') ):
          while( have_rows('available_cards') ): the_row();
        ?>
        <a class="card" href="<?php the_sub_field('link'); ?>">
          <figure>
            <img src="<?php the_sub_field('image'); ?>" alt="Image">
          </figure>
          <article>
            <h3><?php the_sub_field('title'); ?></h3>
            <span class="btn">Read More</span>
          </article>
        </a>
        <?php
          endwhile; endif;
        ?>
       
      </div>
    </div>
  </div>
</section>

<?php kni_import_part('components/contact-block'); ?>
<?php get_footer(); ?>