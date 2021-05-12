<?php
class ThemeHeader {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options');
	}




/**
	 * Logo
	 */
	function get_logo() {
		$logo_url = home_url('/');
		$logo_image = $this->acf_fields['logo']['sizes']['thumbnail'];

		$block = <<<HTML
<div class="col-xl-2 col-lg-2">
	<div class="header__logo">
			<a href="	{$logo_url}"><img src="{$logo_image}" alt="logo"></a>
	</div>
	</div>
HTML;

		return $block;
	}

	/**
	 * Menu
	 */
	function get_header_menu() {
		
		$main_menu = wp_nav_menu(array(
			'echo' => false,
			'theme_location' => 'main_menu',
			'menu_class' => '',
	));
		
		$block = <<<HTML
<div class="col-xl-6 col-lg-7">
	<nav class="header__menu">
	{$main_menu}
	</nav>
</div>
HTML;
	return $block;
	}

	/**
	 * Header_right
	 */
	function get_header_right() {
		$phone_title = $this->acf_fields['phone']['phone_title'];
		$phone_number = $this->acf_fields['phone']['phone_number'];

		$block = <<<HTML
<div class="col-xl-4 col-lg-3">
	<div class="header__right">
			<div class="header__right__phone">
							<a class="phone-title" href="#">$phone_title</a>
							<a href="#">$phone_number</a>
					</div>
			<div class="header__right__auth">
					<a href="#">Login</a>
					<a href="#">Register</a>
			</div>
			<ul class="header__right__widget">
								<li><span class="icon_search search-switch"></span></li>
								<li><a href="#"><span class="icon_heart_alt"></span>
										<div class="tip">2</div>
								</a></li>
								<li><a href="#"><span class="icon_bag_alt"></span>
										<div class="tip">2</div>
								</a></li>
						</ul>
				</div>
		</div>
</div>
HTML;

		return $block;
	}


	/**
	 * Search
	 */
/* 	function get_search() {
		 get_search_form();
	

	} */

}
