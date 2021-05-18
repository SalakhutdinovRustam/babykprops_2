<?php

/**
 * Sidebar posts
 */
function sidebar_feature_posts() {
 
	$block_title = __('Feature posts', 'babykprops');
 $sidebar_posts_list = wp_get_recent_posts( 
	 array( 
		'numberposts' => 3,
		'post_status' => 'publish', ) );

 if(empty($sidebar_posts_list)) {
	return false;
}

$html_sidebar_posts = null;
 foreach ( $sidebar_posts_list as $post_item ){
	$post_ID = $post_item['ID'];
	$post_thumbnail = get_the_post_thumbnail($post_ID, 'featured-posts');
	$post_title = get_the_title($post_ID);
	$post_url = get_permalink($post_ID);
	$post_date = get_the_date('M d, Y', $post_ID);

	$html_sidebar_posts .= '<a href="' . $post_url . '" class="blog__feature__item">
	<div class="blog__feature__item__pic">' . $post_thumbnail. '</div>
	<div class="blog__feature__item__text">
		<h6>' . $post_title . '</h6>
		<span>' . $post_date . '</span>
	</div>
</a>';

}


	$block = <<<HTML

		<div class="blog__sidebar__item">
		   <div class="section-title">
		      <h4>{$block_title}</h4>
	      </div>	
				{$html_sidebar_posts}
		</div>

HTML;

	return $block;
 
}
add_shortcode('sidebar-posts', 'sidebar_feature_posts');