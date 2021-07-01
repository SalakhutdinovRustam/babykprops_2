<?php
get_header(); ?>

<?php echo get_theme_page_title_block(); ?>

<section class="blog spad">
	<div class="container">
		<div class="row">
			<?php
			if (have_posts()) {
				while (have_posts()) {
					the_post();
					get_template_part('template-parts/posts/post', 'item');
				}
				//TODO pagination
			} else {
				//TODO no-content template-part?
				echo __('No Results', 'babykprops');
			}
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>