<?php
$title = get_the_title();
$breadcrumbs = yoast_breadcrumb( '<div id="breadcrumbs">','</div>',false );
$html_thumbnail = get_the_post_thumbnail();
$date = get_the_date();
$content = get_the_content();

$txt_posted_by = __('by', 'babykprops');
$no_comments = __('no comments', 'babykprops');
$one_comments = __('1 comment', 'babykprops');
$comments = __('% comments', 'babykprops');

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
                                <span class="tip"><?php _e('Street style', 'babykprops')?></span>
                                <h4><?php echo $title ?></h4>
                                <ul>
																<li><?php echo $txt_posted_by?> <span><?php the_author(); ?></span></li>
                                    <li><?php echo $date ?></li>
                                    <li><?php comments_number( $no_comments, $one_comments, $comments); ?></li>
																</ul>
                            </div>
                        </div>
                        <div class="blog__details__desc">
												<?php echo $content; ?>
                          </div>
                      
                    </div>
                </div>

            </div>
        </div>
    </section>


<?php 
get_footer();
?>