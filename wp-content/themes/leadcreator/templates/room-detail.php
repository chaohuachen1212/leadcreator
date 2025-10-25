<?php
  // Template Name: Room Detail
  get_header(null, ['body_class' => 'page-room-detail']);
?>

<section class="room-detail--main">
  <div class="container">

    <a class="back-link-wrap" href="<?php the_field('back_link_url'); ?>">
        <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.814171 4.91312C0.618909 4.71786 0.618909 4.40128 0.814171 4.20602L3.99615 1.02404C4.19141 0.828774 4.508 0.828774 4.70326 1.02404C4.89852 1.2193 4.89852 1.53588 4.70326 1.73114L1.87483 4.55957L4.70326 7.388C4.89852 7.58326 4.89852 7.89984 4.70326 8.0951C4.508 8.29037 4.19141 8.29037 3.99615 8.0951L0.814171 4.91312ZM11.3809 5.05957H1.16772V4.05957H11.3809V5.05957Z" fill="#000000"></path></svg>
        <p><?php the_field('back_link_text'); ?></p>
    </a>
    <div class="title">
      <h1><?php the_field('room_detail_title'); ?></h1>
    </div>

    <div class="room-grid">
      <?php
        if( have_rows('room_detail_grid') ):
        while( have_rows('room_detail_grid') ): the_row();
      ?>
      

      <?php if (get_sub_field('turn_on_two_column')): ?>
        <div class="row two-cols">
          <?php
            if( have_rows('images') ):
            while( have_rows('images') ): the_row();
          ?>
            <img src="<?php the_sub_field('image'); ?>" alt="Image">
          <?php
            endwhile; endif;
          ?>
        </div>
      <?php else: ?>
        <div class="row">
          <img src="<?php the_sub_field('image'); ?>" alt="Image">
        </div>
      <?php endif; ?>
      
      <?php
        endwhile; endif;
      ?>

    </div>
  </div>
  <?php kni_import_part('components/contact-block'); ?>
</section>

<?php get_footer(); ?>