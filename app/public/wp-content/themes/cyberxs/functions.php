<?php ?>
<?php
function cyberxs_enqueue_styles() {
    // Loads style.css from theme root
    wp_enqueue_style('cyberxs-style', get_stylesheet_uri());

    // Loads your custom CSS file (update the path if needed)
    wp_enqueue_style('cyberxs-custom', get_template_directory_uri() . '/public/style/pages/homeca13.css', array(), null);
}
add_action('wp_enqueue_scripts', 'cyberxs_enqueue_styles');



# used to show logo on the page in top nav left side
function cyberxs_theme_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'cyberxs_theme_setup');


# one menu location for your top nav


function cyberxs_register_menus() {
    register_nav_menu('top-nav', 'Top Navigation Menu');
}
add_action('after_setup_theme', 'cyberxs_register_menus');


#  You can replace your static footer navigation with a WordPress menu using wp_nav_menu().
# First, register a menu location in your theme (usually in functions.php):
#...existing code...
register_nav_menu('footer-nav', 'Footer Navigation');
#...existing code...



 
# ...existing code...
add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
  if ($args->theme_location === 'footer-nav') {
    $atts['class'] = 'footer-nav__link';
  }
  return $atts;
}, 10, 3);
# ...existing code...
