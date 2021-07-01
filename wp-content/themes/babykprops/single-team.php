<?php

$title = get_the_title();
$content = get_the_content();
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail('', 'medium') : '<img src="'.get_template_directory_uri().'/assets/images/default-placeholder.png" />';
$department = get_field('department');
$post_id = get_the_ID();

//$member_data = ashion_custom_taxonomies_terms_links();
get_header();

//echo get_breadcrumbs_section();
echo get_theme_page_title_block();
?>

	<section class="blog-details spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					<div class="blog__details__content">
						<div class="blog__details__item">
							<?php echo $thumbnail; ?>
							<div class="blog__details__item__title">
								<h4>
									<?php echo $title; ?>
								</h4>
								<div class="taxonomy_text">
								<?php the_taxonomies(); ?>
								</div>
							<!-- 	<?php echo $member_data; ?> -->
							</div>
						</div>
						<div class="blog__details__desc">
							<?php echo $content; ?>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

<?php
get_footer();