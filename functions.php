<?php
@ini_set('upload_max_size', '64M');
@ini_set('post_max_size', '64M');
@ini_set('max_execution_time', '300');

function theme_enqueue_styles()
{
  // wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('bootstrap'));
  wp_enqueue_style('style-normalize', get_template_directory_uri() . '/css/normalize.css', array());
  wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
  wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('widget-block-editor');
  add_theme_support('wp-block-styles');
  add_theme_support('align-wide');
  show_admin_bar(false);
}



add_action('after_setup_theme', 'theme_setup');

add_filter('acf/settings/save_json', 'acf_json_save');

function acf_json_save($path)
{
  // update path
  $path = get_stylesheet_directory() . '/acf-json';

  // return
  return $path;
}

add_filter('acf/settings/load_json', 'acf_json_load');

function acf_json_load($paths)
{
  // remove original path (optional)
  unset($paths[0]);

  // append path
  $paths[] = get_stylesheet_directory() . '/acf-json';

  // return
  return $paths;
}