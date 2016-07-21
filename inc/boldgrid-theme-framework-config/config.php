<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-wedge';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic';

	// Add container to call to action widget.
	$boldgrid_framework_configs['template']['pages']['global']['call-to-action'] = 'container';

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]social' ),
		'11' => array( '[action]boldgrid_primary_navigation' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]tertiary' ),
		'5' => array( '[widget]boldgrid-widget-3', '[menu]footer_center' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// No container is needed on home page for this theme.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = '';

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	// Enable BoldGrid Color Palette System.
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;

	// Set default color palettes for theme.
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#a347ff',
				'#1a1a1a',
				'#d9d9d9',
				'#1a1a1a',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#bfbfbf',
				'#000338',
				'#7c995d',
				'#000338',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#f2fffa',
			'colors' => array(
				'#e58eb2',
				'#1f2a30',
				'#d6d6d6',
				'#1f2a30',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#fea7c4',
				'#4f4f4f',
				'#000000',
				'#4f4f4f',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#e8e8e8',
			'colors' => array(
				'#e8be4c',
				'#011f3f',
				'#b2aca2',
				'#011f3f',
			),
		),
	);

	// Override Options per Subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$slogan = 'MAKE A STATEMENT. ALLOW US TO DESIGN A PRESENCE FOR YOU TODAY';
			$tagline = 'As neighboring businesses grow, making your presence known becomes more and more crucial everyday. We design pieces that will encourage pedestrian interest in your venue. Take the opportunity to express your business and capitalize on the traffic that it deserves.';
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$slogan = 'A MORE BEAUTIFUL HOME AWAITS YOU. GIVE US A CALL TODAY';
			$tagline = 'We believe that every home is capable of being a dream home, given enough love and commitment, of course. Don\'t waste any more time or money figuring out what that bedroom of yours is missing. Contact us and let us apply our expertise today.';
			break;
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			$slogan = 'WE GO BEYOND THE SALE TO GIVE YOU A LASTING SERVICE';
			$tagline = 'It\'s our belief that a realtor\'s work is never quite done. We maintain our projects for several years after closings to ensure that your new home is everything you\'d expect. Your long-lasting satisfaction is always our end-goal.';
			break;
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$slogan = 'WE MAKE IT OUR BUSINESS TO HELP YOUR BUSINESS SUCCEED';
			$tagline = 'There comes a time when every expanding business requires the help of a consulting firm to minimize growing pains. We build organic relationships with all of our clients to ensure custom solutions are met without sacrificing the personality of their businesses.';
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$slogan = 'LET US EXPAND YOUR HORIZONS';
			$tagline = 'Are you ready to make a change? We\'re waiting for you. As a company that prides itself in meeting customer marketing needs, we can ensure that you get what you\'re looking for quickly and for a great price. Don\'t delay getting what you need from a company that cares about its customers.';
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$slogan = 'GET CONTENT THAT ACTUALLY REFLECTS WHAT YOU DO';
			$tagline = 'We pride ourselves in employing content writers from every industry. With our services you\'re guaranteed to have content written for you that directly represents the services that your business provides. Contact us today and see what our experts can do for you.';
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$slogan = 'LET US EXPAND YOUR HORIZONS';
			$tagline = 'Are you ready to make a change? We\'re waiting for you. As a company that prides itself in meeting customer marketing needs, we can ensure that you get what you\'re looking for quickly and for a great price. Don\'t delay getting what you need from a company that cares about its customers.';
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#1a1a1a';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Julius Sans One';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Header Upper Right';
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Footer Left';
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'tertiary';

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-7"></div>
			<div class="col-md-5">
				<div class="call-to-action">
					<h2 class="slogan">$slogan</h2>
					<hr />
					<p class="tagline">$tagline</p>
					<p class="p-button-primary">
						<a class="button-primary" href="contact-us">CONTACT US TODAY</a>
					</p>
				</div>
			</div>
		</div>
HTML;

	// Widget 2.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Call To Action';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Site Title';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function boldgrid_filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Julius Sans One';
	$controls['logo_font_size']['default'] = 44;
	$controls['logo_margin_top']['default'] = 20;
	$controls['logo_margin_bottom']['default'] = 0;

	return $controls;
}
add_filter( 'kirki/fields', 'boldgrid_filter_logo_controls' );
/**
 * Open a div for the background on single posts.
 */
function boldgrid_single_background_open() {
	if ( is_single() ) { ?>
		<div class="row background-primary">
	<?php }
}
add_filter( 'boldgrid_content_before', 'boldgrid_single_background_open' );
/**
 * Close the div for single posts.
 */
function boldgrid_single_background_close() {
	if ( is_single() ) { ?>
		</div>
	<?php }
}
add_filter( 'boldgrid_content_after', 'boldgrid_single_background_close' );
