<?php
$post_url = get_permalink();
$post_title = get_the_title();
$thumbnail = get_the_post_thumbnail();
$html_thumbnail = (!empty($thumbnail)) ? '<a class="blog__item__pic  set-bg" href="'. $post_url .'">'. $thumbnail .'</a>' : null;
$post_date = get_the_date();
$content = get_the_content();
$author = get_the_author();

$txt_posted_by = __('by', 'babykprops');


?>

<div class="blog__item">
		<div class="blog__item__pic  set-bg" data-setbg=""><?php echo $html_thumbnail ?></div>
		<div class="blog__item__text">
				<h6><a href="<?php echo $post_url ?>"><?php echo $post_title ?></a></h6>
				<ul>
						<li><?php echo $txt_posted_by ?> <span><?php echo $author ?></span></li>
						<li><?php echo $post_date ?></li>
				</ul>
		</div>
</div>