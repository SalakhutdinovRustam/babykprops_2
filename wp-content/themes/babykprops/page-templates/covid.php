<?php
/**
 * Template Name: Covid
 **/
?>

<?php 

$html_countries = get_transient('covid_countries_list');

if(empty($html_countries)){
	$countries_data = file_get_contents('https://api.covid19api.com/countries');
	$countries = (!empty($countries_data)) ? json_decode($countries_data) : null;

	if(!empty($countries)){
		$html_countries = null;

		foreach($countries as $country){
			$country_name = $country->Country;
			$country_iso = $country->ISO2;

			$html_countries .= '<option values"'. $country_iso .'">'. $country_name .'</option>';
		}
		set_transient('covid_countries_list', $html_countries, 86400);
	}
}



get_header();
echo get_theme_page_title_block(get_the_title());
?>

<div class="covid-page container">

	<div class="row">
		<div class="col-lg-12">
			<div class="countries-list">
				<select id="countries" style='width: 200px;'">
				<option selected disabled>---<?php _e( 'Choose a country', 'babykprops' ) ?>---</option>
		           <?php echo $html_countries; ?>
				
				</select>
			</div>
		</div>

		<div class="col-lg-12">
			<div class="covid-results">
				<div class="error-message">

				</div>
				<div class="country-chart">
					<canvas id="country_chart"></canvas>
				</div>
			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>

