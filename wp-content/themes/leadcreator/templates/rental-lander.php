<?php
  // Template Name: Rental Lander
  get_header(null, ['body_class' => 'page-rental-lander']);
?>

  <section class="rental-lander--main">
    <div class="container">
      <div class="title">
        <h1><?php the_field('main__rental_title'); ?></h1>
      </div>

      <div class="rental-grid">
        <?php
          if( have_rows('main_rental_cards') ):
          while( have_rows('main_rental_cards') ): the_row();
        ?>
        <a class="card" href="<?php the_sub_field('url'); ?>">
          <figure>
            <img src="<?php the_sub_field('image'); ?>" alt="Image">
          </figure>
          <article>
            <h3>Address:</h3>
            <p><?php the_sub_field('address'); ?></p>
            <span class="btn">Read More</span>
          </article>
        </a>
        <?php
          endwhile; endif;
        ?>
      </div>

    </div>

    <?php kni_import_part('components/contact-block'); ?>
  </section>



<?php get_footer(); ?>