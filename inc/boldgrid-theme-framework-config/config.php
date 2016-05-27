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

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]tertiary' ),
		'5' => array( '[menu]secondary' ),
		'8' => array( '[action]boldgrid_site_identity', '[action]boldgrid_primary_navigation' ),
	);

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]social' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[widget]boldgrid-widget-3' ),
		'11' => array( '[action]boldgrid_display_attribution_links' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	// Remove Container ID that is targetted by navbar-toggle.
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_id'] = 'primary-menu';

	// Remove the container classes that are targetted with navbar-collapse.
	$boldgrid_framework_configs['menu']['prototype']['primary']['container_class'] = 'primary-menu text-center';

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

	// Get Subcategory ID from the Database.
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( ! empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory.
	switch ( $subcategory_id ) {
		// Design.
		case 11:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$slogan = 'MAKE A STATEMENT. ALLOW US TO DESIGN A PRESENCE FOR YOU TODAY';
			$tagline = 'As neighboring businesses grow, making your presence known becomes more and more crucial everyday. We design pieces that will encourage pedestrian interest in your venue. Take the opportunity to express your business and capitalize on the traffic that it deserves.';
			break;
		// Home Repair.
		case 17:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			$slogan = 'A MORE BEAUTIFUL HOME AWAITS YOU. GIVE US A CALL TODAY';
			$tagline = 'We believe that every home is capable of being a dream home, given enough love and commitment, of course. Don\'t waste any more time or money figuring out what that bedroom of yours is missing. Contact us and let us apply our expertise today.';
			break;
		// Real Estate.
		case 19:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			$slogan = 'WE GO BEYOND THE SALE TO GIVE YOU A LASTING SERVICE';
			$tagline = 'It\'s our belief that a realtor\'s work is never quite done. We maintain our projects for several years after closings to ensure that your new home is everything you\'d expect. Your long-lasting satisfaction is always our end-goal.';
			break;
		// Consulting.
		case 21:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			$slogan = 'WE MAKE IT OUR BUSINESS TO HELP YOUR BUSINESS SUCCEED';
			$tagline = 'There comes a time when every expanding business requires the help of a consulting firm to minimize growing pains. We build organic relationships with all of our clients to ensure custom solutions are met without sacrificing the personality of their businesses.';
			break;
		// Marketing.
		case 22:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			$slogan = 'LET US EXPAND YOUR HORIZONS';
			$tagline = 'Are you ready to make a change? We\'re waiting for you. As a company that prides itself in meeting customer marketing needs, we can ensure that you get what you\'re looking for quickly and for a great price. Don\'t delay getting what you need from a company that cares about its customers.';
			break;
		// General.
		case 32:
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
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Julius Sans One';
	$controls['logo_font_size']['default'] = 44;
	$controls['logo_margin_top']['default'] = 20;
	$controls['logo_margin_bottom']['default'] = 0;

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
