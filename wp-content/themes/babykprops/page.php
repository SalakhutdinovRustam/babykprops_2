<?php
$title = get_the_title();
$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>',false );
$html_thumbnail = get_the_post_thumbnail();
$date = get_the_date();
$content = get_the_content();

get_header(); 
echo get_theme_page_title_block($title); 
?>
 <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
								<?php echo $breadcrumbs; ?>
                    <div class="blog__details__content">
                        <div class="blog__details__item">
												<?php echo $html_thumbnail; ?>
                            <div class="blog__details__item__title">
                                <!-- <span class="tip">Street style</span> -->
                                <h4><?php echo $title ?></h4>
                                <ul>
                                    <li>by <span>Ema Timahe</span></li>
                                    <li><?php echo $date ?></li>
                                    <li>39 Comments</li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog__details__desc">
												<?php echo $content; ?>
                          </div>
                        <!-- <div class="blog__details__tags">
                            <a href="#">Fashion</a>
                            <a href="#">Street style</a>
                            <a href="#">Diversity</a>
                            <a href="#">Beauty</a>
                        </div> -->
                     <!--    <div class="blog__details__btns">
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
                        </div> -->
                 <!--        <div class="blog__details__comment">
                            <h5>3 Comment</h5>
                            <a href="#" class="leave-btn">Leave a comment</a>
                            <div class="blog__comment__item">
                                <div class="blog__comment__item__pic">
                                    <img src="<?php echo $temp_html_dir ?>img/blog/details/comment-1.jpg" alt="">
                                </div>
                                <div class="blog__comment__item__text">
                                    <h6>Brandon Kelley</h6>
                                    <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                                    mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                        <li><i class="fa fa-heart-o"></i> 12</li>
                                        <li><i class="fa fa-share"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog__comment__item blog__comment__item--reply">
                                <div class="blog__comment__item__pic">
                                    <img src="<?php echo $temp_html_dir ?>img/blog/details/comment-2.jpg" alt="">
                                </div>
                                <div class="blog__comment__item__text">
                                    <h6>Brandon Kelley</h6>
                                    <p>Consequat consetetur dissentiet, ceteros commune perpetua mei et. Simul viderer
                                    facilisis egimus ulla mcorper.</p>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                        <li><i class="fa fa-heart-o"></i> 12</li>
                                        <li><i class="fa fa-share"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog__comment__item">
                                <div class="blog__comment__item__pic">
                                    <img src="<?php echo $temp_html_dir ?>img/blog/details/comment-3.jpg" alt="">
                                </div>
                                <div class="blog__comment__item__text">
                                    <h6>Brandon Kelley</h6>
                                    <p>Duis voluptatum. Id vis consequat consetetur dissentiet, ceteros commune perpetua
                                    mei et. Simul viderer facilisis egimus tractatos splendi.</p>
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i> Seb 17, 2019</li>
                                        <li><i class="fa fa-heart-o"></i> 12</li>
                                        <li><i class="fa fa-share"></i> 1</li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php 
get_footer();
?>