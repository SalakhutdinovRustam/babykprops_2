<?php
$title = get_the_title();
$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>',false );
$html_thumbnail = get_the_post_thumbnail();
$date = get_the_date();
$content = get_the_content();
$tags_list = get_the_tag_list();

$txt_posted_by = __('by', 'babykprops');

get_header(); 
echo get_theme_page_title_block($title); 
?>

		
		<!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="blog__details__content">
                        <div class="blog__details__item">
												<?php echo $html_thumbnail; ?>
                            <div class="blog__details__item__title">
                                <span class="tip">Street style</span>
                                <h4><?php echo $title ?></h4>
                                <ul>
                                    <li>by <span><?php the_author(); ?></span></li>
                                    <li><?php echo $date ?></li>
                                    <li>39 Comments</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__details__desc">
												<?php echo $content; ?>
                          </div>
                        <div class="blog__details__tags">
												<?php echo $tags_list?>
													
                        </div>
                        <div class="blog__details__btns">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__btn__item">
                                        <h6><a href="#"><i class="fa fa-angle-left"></i> Previous posts</a></h6>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__btn__item blog__details__btn__item--next">
                                        <h6><a href="#">Next posts <i class="fa fa-angle-right"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__comment">
												<?php 
								            	comments_template();
								            	?>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
								<?php 
									get_sidebar();
									?>
                 </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

		
    

		<?php 
get_footer();
?>