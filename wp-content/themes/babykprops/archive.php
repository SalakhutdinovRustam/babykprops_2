<?php 
$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>',false );
$html_thumbnail = get_the_post_thumbnail();
$date = get_the_date();
$content = get_the_content();
get_header();
?>

    <!-- Breadcrumb Begin -->
		
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
								<?php echo $breadcrumbs  ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
             			<?php 
											if(have_posts()) {
												while(have_posts()) {
													the_post();
					
													get_template_part('template-parts/posts/post', 'item');
												}
					
												echo get_the_posts_pagination(array(
													'prev_text' => '«',
													'next_text' => '»'
												));
											} else {
												get_template_part('template-parts/posts/post', 'none');
											}
										
											?>
                       
               
            </div>
						<div class="col-lg-4 col-md-4 col-sm-6">
								<?php 
									get_sidebar();
									?>
               
							</div>
					</div>
        </div>
    </section>
    <!-- Blog Section End -->

 

		<?php 
get_footer();
?>