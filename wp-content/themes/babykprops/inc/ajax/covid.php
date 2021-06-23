<?php
function ajax_get_covid_data() {
	$country_code = esc_sql($_GET['country_code']);

	$results = get_transient('covid_country_data'. $country_code);

	if(empty($results)) {

	$countries_list_url = 'https://api.covid19api.com/countries';
	$countries_list_row = file_get_contents($countries_list_url);
	$countries_list_data = json_decode($countries_list_row);

	$api_url = 'https://api.covid19api.com/dayone/country/'. $country_code;
	$api_raw_data = file_get_contents($api_url);


	$countries_data = [];
	foreach ($countries_list_data as $key => $country) {
		$countries_data[$key]['id'] = $country -> ISO2;
		$countries_data[$key]['text'] = $country -> Country;
	}

	if (empty($api_raw_data)) {
		$output = array(
			'status' => 'error',
			'error' => __('Wrong country ISO 2', 'babykprops'),
			'countries' => $countries_data,
		);

		echo json_encode($output);
		die();
	}
	$api_data = json_decode($api_raw_data);


	$results = array(
		'labels' => array(),
		'datasets' => array(
			array(
				'label' => 'Confirmed',
				'backgroundColor' => 'orange',
				'borderColor' => 'orange',
				'fill' => false,
				'data' => array()
			),
			array(
				'label' => 'Deaths',
				'backgroundColor' => 'black',
				'borderColor' => 'black',
				'fill' => false,
				'data' => array()
			),
			array(
				'label' => 'Recovered',
				'backgroundColor' => 'green',
				'borderColor' => 'green',
				'fill' => false,
				'data' => array()
			),
			array(
				'label' => 'Active',
				'backgroundColor' => 'red',
				'borderColor' => 'red',
				'fill' => false,
				'data' => array()
			),
		),
	);

	$real_items_count = 0;

	foreach ($api_data as $result_item) {
		$province = $result_item->Province;
		$city = $result_item->City;
		$citycode = $result_item->CityCode;

		if(!empty($province) || !empty($city) || !empty($citycode)) {
			continue;
		}

		$real_items_count++;

		if($real_items_count % 10 != 0) {
			continue;
		}

		$confirmed = $result_item->Confirmed;
		$deaths = $result_item->Deaths;
		$recovered = $result_item->Recovered;
		$active = $result_item->Active;

		$raw_date = $result_item->Date;
		$unix_date = strtotime($raw_date);
		$date = date('d/m/Y', $unix_date);

		// Setting up labels
		$results['labels'][] = $date;

		// Setting up Confirmed
		$results['datasets'][0]['data'][] = $confirmed;

		// Setting up Deaths
		$results['datasets'][1]['data'][] = $deaths;

		// Setting up Recovered
		$results['datasets'][2]['data'][] = $recovered;

		// Setting up Active
		$results['datasets'][3]['data'][] = $active;
	}

	set_transient('covid_country_data'. $country_code, $results, 18000);
}

	$output = array(
		'status' => 'success',
		'results' => $results,
		'countries' => $countries_list_data,
	);

	echo json_encode($output);

	die();
}
add_action('wp_ajax_get_covid_data', 'ajax_get_covid_data');
add_action('wp_ajax_nopriv_get_covid_data', 'ajax_get_covid_data');
