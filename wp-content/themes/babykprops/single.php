<?php
$title = get_the_title();
$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>',false );
$html_thumbnail = get_the_post_thumbnail();
$date = get_the_date();
$content = get_the_content();


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
													  <a href="#">Fashion</a>
                            <a href="#">Street style</a>
                            <a href="#">Diversity</a>
                            <a href="#">Beauty</a>
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

		
    <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg" data-setbg="<?php echo $temp_html_dir ?>img/instagram/insta-1.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg" data-setbg="<?php echo $temp_html_dir ?>img/instagram/insta-2.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg" data-setbg="<?php echo $temp_html_dir ?>img/instagram/insta-3.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg" data-setbg="<?php echo $temp_html_dir ?>img/instagram/insta-4.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg" data-setbg="<?php echo $temp_html_dir ?>img/instagram/insta-5.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 col-md-6 col-sm-6 p-0">
                    <div class="instagram__item set-bg" data-setbg="<?php echo $temp_html_dir ?>img/instagram/insta-6.jpg">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ ashion_shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Instagram End -->

		<?php 
get_footer();
?>