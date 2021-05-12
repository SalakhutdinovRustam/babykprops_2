<?php

/**
 * Logo
 */
function footer_logo_shortcode() {
	$home_url = home_url('/');
	$logo = get_field('footer_logo', 'options');

	if(empty($logo)) {
		return false;
	}

	$logo_url = $logo['url'];

	$html_logo = <<<HTML
<div class="footer__logo">
	<a href="{$home_url}">
		<img src="{$logo_url}" alt="footer logo">
	</a>
</div>
HTML;

	return $html_logo;
}
add_shortcode('footer-logo', 'footer_logo_shortcode');

/**
 * Description
 */
function footer_description() {
	$description = get_field('footer_description', 'options');

	if(empty($description)) {
		return false;
	}

	$block = '<p class="footer__about">'. $description .'</p>';

	return $block;
}
add_shortcode('footer-description', 'footer_description');

/**
 * Social networks
 */
function footer_logo_social() {
	$socials_list = get_field('footer_social_networks', 'options');

	if(empty($socials_list)) {
		return false;
	}

	$html_socials = null;
	foreach($socials_list as $social_item) {
		$icon_class = $social_item['icon_class'];
		$network_url = $social_item['network_url'];

		$html_socials .= '<a href="'. $network_url .'"><i class="'. $icon_class .'"></i></a>';
	}

	$block = <<<HTML
<div class="footer__social">
			{$html_socials}
	</div>
HTML;

	return $block;
}
add_shortcode('footer-social-networks', 'footer_logo_social');

/**
 * Payments
 */
function footer_img_payments() {
 
 $payments_list = get_field('footer_payment', 'options');
 

 if(empty($payments_list)) {
	return false;
}

 $html_payments = null;
 foreach($payments_list as $payment_item){
  $payment_title = $payment_item['payment_title'];
  $payment_image = $payment_item['payment_image'];
  $payment_url = $payment_item['payment_url'];


	 $html_payments .= '<a href="'. $payment_url .'"><img src="'. $payment_image .'" alt="'. $payment_title .'"></a>';
 
	}
	$block = <<<HTML
<div class="footer__payment">
{$html_payments}
</div>
HTML;

	return $block;
 
}
add_shortcode('footer-payment', 'footer_img_payments');