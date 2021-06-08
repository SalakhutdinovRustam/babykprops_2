  
<?php
function get_theme_page_title_block($title, $has_breadcrumbs = true) {
	$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>', false );
	$page_title = '<div class="col-12">'. __('404 not found') .'</div>' ;
	$html_breadcrumbs = ($has_breadcrumbs) ? '<div class="col-12">'. $breadcrumbs .'</div>' : $page_title;
	

	$block = <<<HTML
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
										$html_breadcrumbs
                    </div>
                </div>
            </div>
        </div>
    </div>
HTML;

	return $block;
}

function init_google_map() {
	function js_google_map() {
		wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBfvIFnASyOU-3avIokK7VyV5eI4TFQwb4&language=en', '', null, true);
	}
	add_action('wp_enqueue_scripts', 'js_google_map');
}