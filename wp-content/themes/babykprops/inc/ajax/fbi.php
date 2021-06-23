
 <?php 
add_action( 'wp_ajax_get_fbi_wanted_list', 'get_fbi_wanted_list' );
add_action( 'wp_ajax_nopriv_get_fbi_wanted_list', 'get_fbi_wanted_list' );
function get_fbi_wanted_list() {
	$field_office = $_GET['field_office'];

	$result       = get_transient( 'fbi_data_' . $field_office . '_' . ICL_LANGUAGE_CODE );
	if ( empty( $result ) ) {
		$fetch = wp_remote_get( 'https://api.fbi.gov/@wanted?pageSize=12&sort_on=modified&sort_order=desc&field_offices=' . $field_office );
		if ( 404 !== $fetch['response']['code'] ) {
			$wanted_list = json_decode( $fetch['body'] );
			$result              = array();
			$result['items']     = '';
			$no_reward_text      = _x( 'No current reward announced', 'fbi-wanted', 'babykprops' );
			$no_description_text = _x( 'No current description', 'fbi-wanted', 'babykprops' );
			foreach ( $wanted_list->items as $index => $wanted_fugitive ) {
				$reward_text     = ( ! empty( $wanted_fugitive->reward_text ) ) ? $wanted_fugitive->reward_text : $no_reward_text;
				$description     = ( ! empty( $wanted_fugitive->description ) ) ? $wanted_fugitive->description : $no_description_text;
				$result['items'] .= <<<HTML
<li class="fugitive-info col-lg-4 col-md-6 col-sm-12">
    <div class="fugitive-photo">
    	<a href="{$wanted_fugitive->url}" target="_blank">
        	<img src="{$wanted_fugitive->images[0]->original}" alt="">
    	</a>
    </div>
    <div class="fugitive-name">
	    <a href="{$wanted_fugitive->url}" target="_blank">
			{$wanted_fugitive->title}
		</a>
	</div>
    <div class="fugitive-reward">{$reward_text}</div>
    <div class="fugitive-description">{$description}</div>
</li>
HTML;
			}		
			set_transient( 'fbi_data_' . $field_office . '_' . ICL_LANGUAGE_CODE, $result, 18000 );
			wp_send_json( $result );
		} else {
			wp_send_json( $fetch['response'] );
		}
	} else {
		wp_send_json( $result );
	}
}

?>