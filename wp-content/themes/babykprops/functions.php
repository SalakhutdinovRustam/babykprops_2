<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

//Temporary HTML Layouts
$temp_html_dir = THEME_DIR_URI .'/ashion/'; // TODO: delete before production

// Helpers
require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/helpers/theme.php';

// WP
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';
require_once THEME_DIR .'/inc/wp/theme_support.php';
require_once THEME_DIR .'/inc/wp/image_sizes.php';
require_once THEME_DIR .'/inc/wp/widget_areas.php';
require_once THEME_DIR .'/inc/wp/menus.php';

// Hooks
require_once THEME_DIR .'/inc/hooks/images.php';

// ACF
require_once THEME_DIR .'/inc/acf/options_page.php';

// Shortcodes
require_once THEME_DIR .'/inc/shortcodes/footer_shortcodes.php';
require_once THEME_DIR .'/inc/shortcodes/sidebar_shortcodes.php';

// Ajax
require_once THEME_DIR .'/inc/ajax/covid.php';
require_once THEME_DIR .'/inc/ajax/fbi.php';


function wpblog_add_google_fonts() {
	if (!is_admin()) {
	wp_register_style('google', 'https://fonts.googleapis.com/css2?family=Cookie&display=swap', array(), null, 'all');
 	wp_register_style('google', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', array(), null, 'all');
	wp_enqueue_style( 'google');
	}
} 
add_action( 'wp_enqueue_scripts', 'wpblog_add_google_fonts' );


function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyBfvIFnASyOU-3avIokK7VyV5eI4TFQwb4');
}
add_action('acf/init', 'my_acf_init');