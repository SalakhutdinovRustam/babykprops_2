<?php
global $temp_html_dir;
?>
 <!-- Footer Section Begin -->
 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
							
                    <div class="footer__about">
										<?php dynamic_sidebar('footer-col-1'); ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
								<div class="footer__widget">
										<?php dynamic_sidebar('footer-col-2'); ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
										<?php dynamic_sidebar('footer-col-3'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">
										<?php dynamic_sidebar('footer-col-4'); ?>
                       <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
 

			<?php wp_footer(); ?>
</body>

</html>