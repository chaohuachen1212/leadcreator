<?php
  // Template Name: Home
  get_header(null, ['body_class' => 'page-home']);
?>



<section class="home--hero">
  <h1>Home page</h1>
</section>

<section class="home-form--block">
  <div class="container">
    <div class="form-block">
      <h2>Contact us today.</h2>
      <p>We offer a professional WordPress Website and using Figma create your unique website design. Feel free to contact us for more detail, we will offer flexible packages to fit your budget.</p>

      <form class="contact-us--form">
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
