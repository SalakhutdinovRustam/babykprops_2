<?php
get_header();


require_once THEME_DIR . '/inc/classes/ThemeTeam.class.php';

$team = new ThemeTeam();

get_header();

echo get_theme_page_title_block();
?>


<div class="row">
 <div class="col-lg-8 mb-7">
 <?php echo $team->display(); ?>
 </div>


 <div class="col-lg-4 mb-7">
 <?php 
	get_sidebar();
	?>
 </div>
</div>

<?php
get_footer();

