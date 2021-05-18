<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

//Temporary HTML Layouts
$temp_html_dir = THEME_DIR_URI .'/ashion/'; // TODO: delete before production

require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/helpers/theme.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';
require_once THEME_DIR .'/inc/wp/theme_support.php';
require_once THEME_DIR .'/inc/wp/image_sizes.php';
require_once THEME_DIR .'/inc/wp/widget_areas.php';
require_once THEME_DIR .'/inc/wp/menus.php';
require_once THEME_DIR .'/inc/hooks/images.php';
require_once THEME_DIR .'/inc/acf/options_page.php';
require_once THEME_DIR .'/inc/shortcodes/footer_shortcodes.php';
require_once THEME_DIR .'/inc/shortcodes/sidebar_shortcodes.php';


function wpblog_add_google_fonts() {
	if (!is_admin()) {
	wp_register_style('google', 'https://fonts.googleapis.com/css2?family=Cookie&display=swap', array(), null, 'all');
 	wp_register_style('google', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap', array(), null, 'all');
	wp_enqueue_style( 'google');
	}
} 
add_action( 'wp_enqueue_scripts', 'wpblog_add_google_fonts' );