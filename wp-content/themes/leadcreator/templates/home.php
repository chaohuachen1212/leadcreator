<?php
  // Template Name: Home
  get_header(null, ['body_class' => 'page-home']);
?>



<section class="home--hero">
  <div class="container">
    <h1>We have more then 7 years building WordPess Website, headquartered in San Francisco Bay Area. We offer a professional WordPress Website and using Figma create your unique website design.</h1>
  </div>
</section>

<section class="our--works">
  <div class="container">
    <h2>Our Current Works</h2>
    <div class="projects-wrap">
      <a class="project" href="https://lanternfoundationus.org/" target="_blank">
        <img src="<?php echo GET_URI . '/img/home/lantern-foundation.webp'; ?>" alt="Image">
        <div class="text-wrap">
          <span>Lantern Foundation</span>
          <?php include GET_DIR . '/img/home/arrow-right.svg'; ?>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="home-form--block">
  <div class="container">
    <div class="form-block">
      <h2>Contact us today.</h2>
      <p>We offer a professional WordPress Website and using Figma create your unique website design. Feel free to contact us for more detail, we will offer flexible packages to fit your budget.</p>

      <form class="contact-us--form" id="contact">
      <div class="row">
        <div class="half">
          <input type="text" class="input-required" id="fname" name="entry.557545104" placeholder="First Name">
        </div>
        <div class="half">
          <input type="text" class="input-required" id="lname" name="entry.1882491951" placeholder="Last Name">
        </div>
      </div>
      <div class="row">
        <div class="half">
          <input type="text" name="entry.1502570712" placeholder="Phone">
        </div>
        <div class="half">
          <input type="email" name="entry.1924665115" placeholder="Email">
        </div>
      </div>

      <textarea id="w3review" name="entry.1511579107" rows="4" cols="50" placeholder="Message"></textarea>
      <input id="contact-us-submit" type="submit" value="Contact Us">
    </form>
    </div>
  </div>
</section>



<?php get_footer(); ?>
