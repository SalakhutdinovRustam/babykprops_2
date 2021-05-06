  
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