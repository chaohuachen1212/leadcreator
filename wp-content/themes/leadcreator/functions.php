<?php

function theme_enqueue_scripts() {
  wp_enqueue_style( 'theme-style', get_stylesheet_uri(), $dependencies = array(), filemtime( get_template_directory() . '/style.css' ) );
  wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/index.js', array(), filemtime( get_template_directory() . '/js/index.js' ), true);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

// allows for featured image.
add_theme_support('post-thumbnails');
// add_post_type_support('custom-post-type-name', 'thumbnail');

// remove default page editor
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

// use for includes
define('GET_DIR', get_template_directory());

// use for images
define('GET_URI', get_template_directory_uri());

// allow svg upload to media library
function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// insert a template part
function kni_import_part($part_name, $data = null, $class_name = null) {
  set_query_var('component_data', $data);
  set_query_var('component_class', $class_name);
  get_template_part('templates/' . $part_name);
  set_query_var('component_data', null);
  set_query_var('component_class', null);
}

// global option pages for nav and footer custom fields
if (function_exists('acf_add_options_page')) {
  $parent = acf_add_options_page(array(
    'page_title' => 'Theme General Settings',
    'menu_title' => 'Theme Settings',
    'menu_slug' => 'theme-general-settings',
    'redirect' => false
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Header Settings',
    'menu_title' => 'Header',
    'menu_slug' => 'header',
    'post_id' => 'header',
    'parent_slug' =>  $parent['menu_slug']
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Footer Settings',
    'menu_title' => 'Footer',
    'menu_slug' => 'footer',
    'post_id' => 'footer',
    'parent_slug' =>  $parent['menu_slug']
  ));
}



// convert text into a slug
function kni_slugify( $string, $remove_numbers = false ) {
  $string = htmlspecialchars_decode($string);
  // replace non letter or digits by -
  $string = preg_replace('~[^\pL\d]+~u', '-', $string);

  // transliterate
  $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);

  // remove unwanted characters
  $string = preg_replace('~[^-\w]+~', '', $string);

  // trim
  $string = trim($string, '-');

  // remove duplicated - symbols
  $string = preg_replace('~-+~', '-', $string);

  // lowercase
  $string = strtolower($string);

  // remove numbers

  if ($remove_numbers) {
    $string = preg_replace('/[0-9]+/', '', $string);
  }

  if (empty($string)) {
    return 'n-a';
  }

  return $string;
}

/**
 * Get primary taxonomy of post
 * @param int $post_id the id of the post
 * @param string $taxonomy the taxonomy we want to search
 */
function get_primary_category($post_id, $return_name = true) {
  $post_type = get_post_type($post_id);

  switch ($post_type) {
    case 'post':
      $category_name = 'category';
      break;
    default:
      return '';
  }

  if (class_exists('WPSEO_Primary_Term')) {
    $wpseo_primary_term = new WPSEO_Primary_Term( $category_name, $post_id );
    $primary_cat_id = $wpseo_primary_term->get_primary_term();
  }

  if ($primary_cat_id) {
    $primary_cat = get_term($primary_cat_id, $category_name);


    if (!$return_name) {
      return $primary_cat;
    }

    if (isset($primary_cat->name) and 'uncategorized' !== $primary_cat->slug) {
      return $primary_cat->name;
    }
  }

  if (!$return_name) {
    return null;
  }

  // if no main category found or if main category is uncategorized
  switch ($post_type) {
    case 'post':
      return 'Blog';
      break;
  }

  return null;
}

// remove forced margin top on html
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

// don't expose users
add_filter('rest_endpoints', function ($endpoints) {
  $removedEndpoints = array(
    '/wp/v2/users', // User list
    '/wp/v2/users/(?P<id>[\d]+)' // Specific user lookup
  );

  foreach ($removedEndpoints as $endpoint) {
    if (isset($endpoints[$endpoint]))
      unset($endpoints[$endpoint]);
  }

  return $endpoints;
});

// disable block editor
add_filter('use_block_editor_for_post', '__return_false');

// remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
 }
 add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
