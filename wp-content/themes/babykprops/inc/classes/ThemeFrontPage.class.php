<?php
class ThemeFrontPage {

/*
* Text + Image (2 columns)
*/
function text_image_2_col($data) {
	$layout = $data['layout'];

	// Image
	$image_id = $data['image']['ID'];
	$image = wp_get_attachment_image($image_id, 'large');
	$html_image = <<<HTML
	<div class="col-lg-6 p-0">
			<div class="discount__pic">
					{$image}
			</div>
	</div>
	HTML;

	
	
	// Text
	$discount_span = $data['text']['discount_span'];
	$discount_title = $data['text']['discount_title'];
	$discount_subtitle = $data['text']['discount_subtitle'];
	$discount_subtitle_value = $data['text']['discount_subtitle_value'];
	$shop_now_link = $data['text']['shop_now_link'];
	$shop_now_text = $data['text']['shop_now_text'];
	$countdown_day = $data['text']['countdown_day'];

	$html_text = <<<HTML
<div class="col-lg-6 p-0">
			<div class="discount__text">
					<div class="discount__text__title">
							<span>{$discount_span}</span>
							<h2>{$discount_title}</h2>
							<h5><span>{$discount_subtitle}</span>{$discount_subtitle_value}%</h5>
					</div>
					<div class="discount__countdown" id="countdown-time" data-final-date="{$countdown_day}">
					</div>
					<a href="{$shop_now_link}">{$shop_now_text}</a>
			</div>
	</div>
HTML;

	// Display
	if($layout == 'txt_img') {
		$display = $html_text . $html_image;
	} else {
		$display = $html_image . $html_text;
	}


		$html_block = <<<HTML
<section class="flex_text_image_2_col">
		<div class="container">
		<div class="row">
			{$display}
		</div>
		</div>
		</section>
HTML;

	return $html_block;
}	


  /*
	 * Services spad
	 */

	function servicespad($data) {

		$servises_data = $data['servises_spad'];
		
		if(empty($servises_data)) {
			return false;
		}

		$html_services = null;
		foreach($servises_data as $services_item) {
	

			$fa_lab = $services_item['label'];
		  $services_title = $services_item['title'];
			$services_description = $services_item['description'];

			$html_services .= <<<HTML
<div class="col-lg-3 col-md-4 col-sm-6">
 <div class="services__item">
{$fa_lab}
<h6>{$services_title}</h6>
<p>{$services_description}</p>
</div>
</div>
HTML;
		}

		

		$html_block = <<<HTML
<section class="services spad">
	<div class="container">
		<div class="row">
			
				{$html_services}
			
		</div>
	</div>
</section>
HTML;


		return $html_block; 
	}

}