<?php
  // Template Name: Home
  get_header(null, ['body_class' => 'page-home']);
?>



<section class="home--hero">
  <div class="container">
    <h1>With over 7 years of experience building WordPress websites, we are proud to be headquartered in the San Francisco Bay Area. Our team specializes in creating professional, high-quality WordPress websites tailored to your business needs. Using Figma, we design unique, modern, and user-friendly website layouts that bring your brand to life.</h1>
  </div>
</section>

<section class="our--works">
  <div class="container">
    <div class="top-wrap">
      <h2>Our Current Works</h2>
      <p>Lantern Foundation and H&L Rental LLC are ongoing web projects, and our clients are exploring additional design ideas that align with their budgets. If you don’t have a specific design in mind, no worries—using the content you’ve provided, we can present multiple design options for you to choose from. We can build any web components and functionalities you need for your site.</p>
    </div>

    <div class="projects-wrap">
      <div class="project" data="<?php echo GET_URI . '/img/lantern-foundation.webp'; ?>" data-url="https://lanternfoundationus.org/" >
        <img src="<?php echo GET_URI . '/img/home/lantern-foundation.webp'; ?>" alt="Image">
        <div class="text-wrap">
          <span>Lantern Foundation</span>
          <?php include GET_DIR . '/img/home/arrow-right.svg'; ?>
        </div>
      </div>
      <div class="project yellow dark-bg" data="<?php echo GET_URI . '/img/hl-rental.webp'; ?>" data-url="https://hlrental.com/berkeley-rental/" >
        <img src="<?php echo GET_URI . '/img/home/hl-rental-llc.webp'; ?>" alt="Image">
        <div class="text-wrap">
          <span>H&L Rental LLC</span>
          <?php include GET_DIR . '/img/home/arrow-right.svg'; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-form--block">
  <div class="container">
    <div class="form-block">
      <h2>Contact us today</h2>
      <p>Looking for a stunning, high-performing website? We specialize in custom WordPress websites, designed from scratch using Figma to perfectly reflect your brand’s identity.</p>
      <p>Whether you need a personal portfolio, business site, or eCommerce store, we provide flexible packages tailored to fit your goals and budget.</p>
      <p>Contact us today to discuss your project and bring your vision to life!</p>

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
          <input type="email" class="input-required" name="entry.1924665115" placeholder="Email">
        </div>
      </div>

      <textarea id="w3review" name="entry.1511579107" rows="4" cols="50" placeholder="Message"></textarea>
      <input id="contact-us-submit" type="submit" value="Contact Us">
    </form>
    </div>
  </div>
</section>

  <div class="video--popup-block">
    <div class="container">
      <a class="page-link" href="" target="_blank">
      <img src="<?php echo GET_URI . '/img/lantern-foundation.webp'; ?>" alt="Image">
      </a>
    </div>

    <div class="close">
      <span>&times</span>
    </div>
  </div>

<?php get_footer(); ?>
