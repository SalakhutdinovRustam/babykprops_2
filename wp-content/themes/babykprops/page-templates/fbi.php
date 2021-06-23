<?php
/**
 * Template Name: FBI Wanted
 **/

get_header();
echo get_theme_page_title_block(get_the_title());
?>
<div class="fbi-page container">

<div class="row">
	<div class="col-lg-12">
		<div class="offices-list">
			<select id="offices" style='width: 300px;'>
					<option selected disabled>---<?php _e( 'Choose a office', 'babykprops' ) ?>---</option>
						<option value="albany"><?php _e('Albany', 'babykprops' ) ?></option>
						<option value="albuquerque"><?php _e('Albuquerque', 'babykprops' ) ?></option>
						<option value="anchorage"><?php _e('Anchorage', 'babykprops' ) ?></option>
						<option value="atlanta"><?php _e('Atlanta', 'babykprops' ) ?></option>
						<option value="baltimore"><?php _e('Baltimore', 'babykprops' ) ?></option>
						<option value="birmingham"><?php _e('Birmingham', 'babykprops' ) ?></option>
						<option value="boston"><?php _e('Boston', 'babykprops' ) ?></option>
						<option value="buffalo"><?php _e('Buffalo', 'babykprops' ) ?></option>
						<option value="charlotte"><?php _e('Charlotte', 'babykprops' ) ?></option>
						<option value="chicago"><?php _e('Chicago', 'babykprops' ) ?></option>
						<option value="cincinnati"><?php _e('Cincinnati', 'babykprops' ) ?></option>
						<option value="cleveland"><?php _e('Cleveland', 'babykprops' ) ?></option>
						<option value="columbia"><?php _e('Columbia', 'babykprops' ) ?></option>
						<option value="dallas"><?php _e('Dallas', 'babykprops' ) ?></option>
						<option value="denver"><?php _e('Denver', 'babykprops' ) ?></option>
						<option value="detroit"><?php _e('Detroit', 'babykprops' ) ?></option>
						<option value="elpaso"><?php _e('El Paso', 'babykprops' ) ?></option>
						<option value="honolulu"><?php _e('Honolulu', 'babykprops' ) ?></option>
						<option value="houston"><?php _e('Houston', 'babykprops' ) ?></option>
						<option value="indianapolis"><?php _e('Indianapolis', 'babykprops' ) ?></option>
						<option value="jackson"><?php _e('Jackson', 'babykprops' ) ?></option>
						<option value="jacksonville"><?php _e('Jacksonville', 'babykprops' ) ?></option>
						<option value="kansascity"><?php _e('Kansas City', 'babykprops' ) ?></option>
						<option value="knoxville"><?php _e('Knoxville', 'babykprops' ) ?></option>
						<option value="lasvegas"><?php _e('Las Vegas', 'babykprops' ) ?></option>
						<option value="littlerock"><?php _e('Little Rock', 'babykprops' ) ?></option>
						<option value="losangeles"><?php _e('Los Angeles', 'babykprops' ) ?></option>
						<option value="louisville"><?php _e('Louisville', 'babykprops' ) ?></option>
						<option value="memphis"><?php _e('Memphis', 'babykprops' ) ?></option>
						<option value="miami"><?php _e('Miami', 'babykprops' ) ?></option>
						<option value="milwaukee"><?php _e('Milwaukee', 'babykprops' ) ?></option>
						<option value="minneapolis"><?php _e('Minneapolis', 'babykprops' ) ?></option>
						<option value="mobile"><?php _e('Mobile', 'babykprops' ) ?></option>
						<option value="newhaven"><?php _e('New Haven', 'babykprops' ) ?></option>
						<option value="neworleans"><?php _e('New Orleans', 'babykprops' ) ?></option>
						<option value="newyork"><?php _e('New York', 'babykprops' ) ?></option>
						<option value="newark"><?php _e('Newark', 'babykprops' ) ?></option>
						<option value="norfolk"><?php _e('Norfolk', 'babykprops' ) ?></option>
						<option value="oklahomacity"><?php _e('Oklahoma City', 'babykprops' ) ?></option>
						<option value="omaha"><?php _e('Omaha', 'babykprops' ) ?></option>
						<option value="philadelphia"><?php _e('Philadelphia', 'babykprops' ) ?></option>
						<option value="phoenix"><?php _e('Phoenix', 'babykprops' ) ?></option>
						<option value="pittsburgh"><?php _e('Pittsburgh', 'babykprops' ) ?></option>
						<option value="portland"><?php _e('Portland', 'babykprops' ) ?></option>
						<option value="richmond"><?php _e('Richmond', 'babykprops' ) ?></option>
						<option value="sacramento"><?php _e('Sacramento', 'babykprops' ) ?></option>
						<option value="saltlakecity"><?php _e('Salt Lake City', 'babykprops' ) ?></option>
						<option value="sanantonio"><?php _e('San Antonio', 'babykprops' ) ?></option>
						<option value="sandiego"><?php _e('San Diego', 'babykprops' ) ?></option>
						<option value="sanfrancisco"><?php _e('San Francisco', 'babykprops' ) ?></option>
						<option value="sanjuan"><?php _e('San Juan', 'babykprops' ) ?></option>
						<option value="seattle"><?php _e('Seattle', 'babykprops' ) ?></option>
						<option value="springfield"><?php _e('Springfield', 'babykprops' ) ?></option>
						<option value="stlouis"><?php _e('St. Louis', 'babykprops' ) ?></option>
						<option value="tampa"><?php _e('Tampa', 'babykprops' ) ?></option>
						<option value="washingtondc"><?php _e('Washington', 'babykprops' ) ?></option>
			


			</select>
		</div>
	</div>

	<div class="col-lg-12">
			<div class="fbi-results">
	  	</div>	
		<div class="error-message" style="display:none">
			<h4><?php _e( 'There are no profiles in the office', 'babykprops' ) ?>
			</h4>
		</div>
	</div>

</div>

</div>

<?php get_footer(); ?>