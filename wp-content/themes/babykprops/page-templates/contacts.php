<?php
/* Template Name: Contacts page */


/**
 * Contact info
 */
$contact_info = get_field('contact_info');

$html_contact_info = null;
 if(!empty($contact_info)) {

	$contact_section_title = $contact_info['contact_title'];
	$address_title = $contact_info['address_title'];
	$address_label = $contact_info['address_label'];
	$address = $contact_info['address'];
	$phone_title = $contact_info['phone_title'];
	$phone_label = $contact_info['phone_label'];
	$phone_1 = $contact_info['phone_1'];
	$phone_2 = $contact_info['phone_2'];
	$support_title = $contact_info['support_title'];
	$support_label = $contact_info['support_label'];
	$support = $contact_info['support'];

	$html_contact_info = <<<HTML
 <h5>$contact_section_title</h5>
	<ul>
			<li>
					<h6>{$address_label} {$address_title}</h6>
					<p>{$address}</p>
			</li>
			<li>
					<h6>{$phone_label} {$phone_title}</h6>
					<p><span>{$phone_1}</span><span>{$phone_2}</span></p>
			</li>
			<li>
					<h6>{$support_label} {$support_title}</h6>
					<p>{$support}</p>
			</li>
	</ul>
HTML;

} 


/**
 * Map
 */
$map = get_field('map');

$html_map = null;
if(!empty($map)) {
	$map_lat = esc_attr($map['lat']);
	$map_lng = esc_attr($map['lng']);

	$html_map = <<<HTML
<div class="acf-map" data-zoom="16">
	<div class="marker" data-lat="{$map_lat}" data-lng="{$map_lng}"></div>
</div>
HTML;
}

init_google_map(); 

get_header();

echo get_theme_page_title_block(get_the_title());
?>

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
												<?php echo $html_contact_info; ?>
                        </div>
										<?php  echo do_shortcode('[contact-form-7 id="129" title="Feedback form (Contacts page)"]')	 ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
										<?php echo $html_map; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?php get_footer(); ?>

