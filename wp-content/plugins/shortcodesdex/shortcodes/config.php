<?php

global $stagtools;

$stag_shortcodes['section'] = array(
	'no_preview' => true,
	'params'     => array(
		'content' => array(
			'type'  => 'textarea',
			'label' => __( 'Content Text', 'stag' ),
			'desc'  => __( 'Enter the content text.', 'stag' ),
			'std'   => 'Content into Section',
		),'background' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Background URL', 'stag' ),
			'desc'  => __( 'Enter the URL where the image should be linked (optional)', 'stag' )
		)
	),
	'shortcode'   => '[section class="" background="{{background}}"]{{content}}[/section]',
	'popup_title' => __( 'Add Section', 'stag' )
);
$stag_shortcodes['title_section'] = array(
	'no_preview' => true,
	'params'     => array(
		'content' => array(
			'type'  => 'text',
			'label' => __( 'Title section', 'stag' ),
			'desc'  => __( 'Enter the content title, it should to be between H2 tags.', 'stag' ),
			'std'   => '<h2>TITLE SECTION</h2>',
		),'under_title' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Text below title', 'stag' ),
			'desc'  => __( 'Enter the text below title (optional)', 'stag' )
		),
	),
	'shortcode'   => '[title_section]<h2>{{content}}</h2>[under_title]{{under_title}}[/under_title][/title_section]',
	'popup_title' => __( 'Add title_section', 'stag' )
);
$stag_shortcodes['under_title'] = array(
	'no_preview' => true,
	'params'     => array(
		'content' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Text below title', 'stag' ),
			'desc'  => __( 'Enter the text below title (optional)', 'stag' )
		),
	),
	'shortcode'   => '[under_title]{{content}}[/under_title]',
	'popup_title' => __( 'Add title_section', 'stag' )
);
$stag_shortcodes['row'] = array(
	'no_preview' => true,
	'params'     => array(
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Text row', 'stag' ),
			'desc'  => __( 'Enter the text content (optional)', 'stag' )
		),
	),
	'shortcode'   => '[row]{{content}}[/row]',
	'popup_title' => __( 'Add row', 'stag' )
);
$stag_shortcodes['social_icons'] = array(
	'no_preview' => true,
	'params'     => array(
		'content' => array(
			'std'   => '',
			'type'  => 'textarea',
			'label' => __( 'Text row', 'stag' ),
			'desc'  => __( 'Enter the text content (optional)', 'stag' )
		),
	),
	'shortcode'   => '[social_icons]{{content}}[/social_icons]',
	'popup_title' => __( 'Add row', 'stag' )
);
$stag_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Button URL', 'stag' ),
			'desc'  => __( 'Add the button&lsquo;s url e.g. http://example.com', 'stag' )
		),
		'style' => array(
			'type'    => 'select',
			'label'   => __( 'Button Style', 'stag' ),
			'desc'    => __( 'Select the button&lsquo;s style, ie the button&lsquo;s colour', 'stag' ),
			'std'     => 'black',
			'options' => array(
				'grey'       => __( 'Grey', 'stag' ),
				'black'      => __( 'Black', 'stag' ),
				'green'      => __( 'Green', 'stag' ),
				'light-blue' => __( 'Light Blue', 'stag' ),
				'blue'       => __( 'Blue', 'stag' ),
				'red'        => __( 'Red', 'stag' ),
				'orange'     => __( 'Orange', 'stag' ),
				'purple'     => __( 'Purple', 'stag' ),
				'white'      => __( 'White', 'stag' )
			)
		),
		'size' => array(
			'type'    => 'select',
			'label'   => __( 'Button Size', 'stag' ),
			'desc'    => __( 'Select the button&lsquo;s size', 'stag' ),
			'std'     => 'small',
			'options' => array(
				'small'  => __( 'Small', 'stag' ),
				'medium' => __( 'Medium', 'stag' ),
				'large'  => __( 'Large', 'stag' )
			)
		),
		/* 'type' => array(
			'type'    => 'select',
			'label'   => __( 'Button Type', 'stag' ),
			'desc'    => __( 'Select the button&lsquo;s type', 'stag' ),
			'options' => array(
				'normal' => __( 'Normal', 'stag' ),
				'stroke' => __( 'Stroke', 'stag' ),				
				'rounted' => __( 'Stroke', 'stag' ),				
			)
		), */
		'icon' => array(
			'std'   => '',
			'type'  => 'icons',
			'label' => __( 'Button Icon', 'stag' ),
			'desc'  => __( 'Choose an icon', 'stag' )
		),
		'icon_position' => array(
			'type'    => 'select',
			'label'   => __( 'Icon Position', 'stag' ),
			'desc'    => __( 'Select if the icon should display before text or after text.', 'stag' ),
			'std'     => 'before',
			'options' => array(
				'before' => __( 'Before Text', 'stag' ),
				'after'  => __( 'After Text', 'stag' )
			)
		),
		'target' => array(
			'type'    => 'select',
			'label'   => __( 'Button Target', 'stag' ),
			'desc'    => __( '_self = open in same window. _blank = open in new window', 'stag' ),
			'std'     => '_self',
			'options' => array(
				'_self'  => __( '_self', 'stag' ),
				'_blank' => __( '_blank', 'stag' )
			)
		),
		'content' => array(
			'std'   => 'Button Text',
			'type'  => 'text',
			'label' => __( 'Button&lsquo;s Text', 'stag' ),
			'desc'  => __( 'Add the button&lsquo;s text', 'stag' ),
		)
	),
	'shortcode'   => '[button url="{{url}}" style="{{style}}" size="{{size}}" target="{{target}}" icon="{{icon}}" icon_position="{{icon_position}}"]{{content}}[/button]',
	'popup_title' => __('Insert Button Shortcode', 'stag')
);


$stag_shortcodes['alert'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type'    => 'select',
			'label'   => __('Alert Style', 'stag'),
			'desc'    => __('Select the alert&lsquo;s style, i.e. the alert colour', 'stag'),
			'std'     => 'red',
			'options' => array(
				'white'  => __( 'White', 'stag' ),
				'grey'   => __( 'Grey', 'stag' ),
				'red'    => __( 'Red', 'stag' ),
				'yellow' => __( 'Yellow', 'stag' ),
				'green'  => __( 'Green', 'stag' ),
				'blue'   => __( 'Blue', 'stag' )
			)
		),
		'content' => array(
			'std'   => 'Your Alert!',
			'type'  => 'textarea',
			'label' => __( 'Alert Text', 'stag' ),
			'desc'  => __( 'Add the alert&lsquo;s text', 'stag' )
		)
	),
	'shortcode' => '[alert_box style="{{style}}"]{{content}}[/alert_box]',
	'popup_title' => __('Insert Alert Shortcode', 'stag')
);

$stag_shortcodes['toggle'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type'    => 'select',
			'label'   => __('Toggle Style', 'stag'),
			'desc'    => __('Select the toggle&lsquo;s style', 'stag'),
			'options' => array(
				'normal' => __( 'Normal', 'stag' ),
				'stroke' => __( 'Stroke', 'stag' ),
			)
		),
		'title' => array(
			'type'  => 'text',
			'label' => __('Toggle Content Title', 'stag'),
			'desc'  => __('Add the title that will go above the toggle content', 'stag'),
			'std'   => 'Title'
		),
		'content' => array(
			'std'   => 'Content',
			'type'  => 'textarea',
			'label' => __('Toggle Content', 'stag'),
			'desc'  => __('Add the toggle content. Will accept HTML', 'stag'),
		),
		'state' => array(
			'type'    => 'select',
			'label'   => __('Toggle State', 'stag'),
			'desc'    => __('Select the state of the toggle on page load', 'stag'),
			'options' => array(
				'open'   => __( 'Open', 'stag' ),
				'closed' => __( 'Closed', 'stag' )
			)
		),
	),
	'shortcode'   => '[stag_toggle style="{{style}}" title="{{title}}" state="{{state}}"]{{content}}[/stag_toggle]',
	'popup_title' => __('Insert Toggle Content Shortcode', 'stag')
);

$stag_shortcodes['columns'] = array(
	'params'      => array(),
	'shortcode'   => '{{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'stag'),
	'no_preview'  => true,

	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type'    => 'select',
				'label'   => __('Column Type', 'stag'),
				'desc'    => __('Select the type, ie width of the column.', 'stag'),
				'options' => array(
					'4'         => __( 'One Third', 'stag' ),
					'8'         => __( 'Two Thirds', 'stag' ),
					'6'          => __( 'One Half', 'stag' ),
					'3'        => __( 'One Fourth', 'stag' ),
					'9'      => __( 'Three Fourth', 'stag' ),
					'2'         => __( 'One Sixth', 'stag' ),
					'10'        => __( 'Five Sixth', 'stag' ),
				)
			),
			'content' => array(
				'std'   => '',
				'type'  => 'textarea',
				'label' => __('Column Content', 'stag'),
				'desc'  => __('Add the column content.', 'stag'),
			)
		),
		'shortcode'    => '[column grid="{{column}}"]{{content}}[/column] ',
		'clone_button' => __('Add Column', 'stag')
	)
);

$stag_shortcodes['divider'] = array(
	'no_preview' => true,
	'params'     => array(
		'style' => array(
			'type'    => 'select',
			'label'   => __( 'Divider', 'stag' ),
			'desc'    => __( 'Select the style of the Divider', 'stag' ),
			'options' => array(
				'line'  => __( 'Line', 'stag' ),
				'link' => __( 'Link Icon', 'stag' ),
			)
		),
	),
	'shortcode'   => '[divider style="{{style}}"]',
	'popup_title' => __( 'Insert Divider', 'stag' )
);


$stag_shortcodes['tabs'] = array(
	'params' => array(
		'style' => array(
			'type'    => 'select',
			'label'   => __('Tabs Style', 'stag'),
			'desc'    => __('Select the tabs&lsquo;s style', 'stag'),
			'options' => array(
				'normal' => __( 'Normal', 'stag' ),
				'stroke' => __( 'Stroke', 'stag' ),
			)
		)
	),
	'no_preview'  => true,
	'shortcode'   => '[stag_tabs style="{{style}}"]{{child_shortcode}} [/stag_tabs]',
	'popup_title' => __( 'Insert Tab Shortcode', 'stag' ),
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'std'   => 'Title',
				'type'  => 'text',
				'label' => __( 'Tab Title', 'stag' ),
				'desc'  => __( 'Title of the tab', 'stag' ),
			),
			'content' => array(
				'std'     => 'Tab Content',
				'type'    => 'textarea',
				'label'   => __( 'Tab Content', 'stag' ),
				'desc'    => __( 'Add the tabs content', 'stag' )
			)
		),
		'shortcode'    => '[stag_tab title="{{title}}"]{{content}}[/stag_tab]',
		'clone_button' => __( 'Add Tab', 'stag' )
	)
);

$stag_shortcodes['dropcap'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type'    => 'select',
			'label'   => __('Dropcap Style', 'stag'),
			'desc'    => __('Select the dropcap&lsquo;s style', 'stag'),
			'options' => array(
				'normal' => __( 'Normal', 'stag' ),
				'squared' => __( 'Squared', 'stag' ),
			)
		),
		'content' => array(
			'std'   => 'D',
			'type'  => 'text',
			'label' => __( 'Dropcap Text', 'stag' ),
			'desc'  => __( 'Enter the dropcap&lsquo;s text', 'stag' )
		),
		'size' => array(
			'std'   => '50px',
			'type'  => 'text',
			'label' => __( 'Font Size', 'stag' ),
			'desc'  => __( 'Enter the font&lsquo;s size in px, em or %', 'stag' ),
		),
	),
	'shortcode'   => '[stag_dropcap font_size="{{size}}" style="{{style}}"]{{content}}[/stag_dropcap]',
	'popup_title' => __( 'Insert Dropcap Shortcode', 'stag' )
);

$stag_shortcodes['image'] = array(
	'no_preview' => true,
	'params' => array(
		'src' => array(
			'std'   => '',
			'type'  => 'image',
			'label' => __( 'Image', 'stag' ),
			'desc'  => __( 'Choose your image', 'stag' )
		),
		'style' => array(
			'type'    => 'select',
			'label'   => __('Image Filter', 'stag'),
			'desc'    => __('Select the CSS3 image filter style', 'stag'),
			'std'     => 'no-filter',
			'options' => array(
				'no-filter'  => __( 'No Filter', 'stag' ),
				'grayscale'  => __( 'Grayscale', 'stag' ),
				'sepia'      => __( 'Sepia', 'stag' ),
				'blur'       => __( 'Blur', 'stag' ),
				'hue-rotate' => __( 'Hue Rotate', 'stag' ),
				'contrast'   => __( 'Contrast', 'stag' ),
				'brightness' => __( 'Brightness', 'stag' ),
				'invert'     => __( 'Invert', 'stag' ),
			)
		),
		'alignment' => array(
			'type'    => 'select',
			'label'   => __('Alignment', 'stag'),
			'desc'    => __('Choose Image Alignment', 'stag'),
			'std'     => 'none',
			'options' => array(
				'none'   => __( 'None', 'stag' ),
				'left'   => __( 'Left', 'stag' ),
				'center' => __( 'Center', 'stag' ),
				'right'  => __( 'Right', 'stag' )
			)
		),
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'URL', 'stag' ),
			'desc' => __( 'Enter the URL where image should be linked (optional)', 'stag' )
		)
	),
	'shortcode'   => '[stag_image style="{{style}}" src="{{src}}" alignment="{{alignment}}" url="{{url}}"]',
	'popup_title' => __( 'Insert Image Shortcode', 'stag' )
);


$stag_shortcodes['video'] = array(
	'no_preview' => true,
	'params' => array(
		'src' => array(
			'std'   => '',
			'type'  => 'video',
			'label' => __( 'Choose Video', 'stag' ),
			'desc'  => __( 'Either upload a new video, choose an existing video from your media library or link to a video by URL. <br><br>', 'stag' ) . sprintf( __('A list of all shortcode video services can be found on %s.<br>', 'stag' ), '<a target="_blank" href="//codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F">WordPress.org</a>.<br><br>Working examples, in case you want to use an external service:<br><strong>http://vimeo.com/18439821</strong><br/><strong>http://www.youtube.com/watch?v=G0k3kHtyoqc</strong>' )
		)
	),
	'shortcode' => '[stag_video src="{{src}}"]',
	'popup_title' => __( 'Insert Video Shortcode', 'stag' )
);

$stag_shortcodes['icon'] = array(
	'no_preview' => true,
	'params' => array(
		'icon' => array(
			'std'   => '',
			'type'  => 'icons',
			'label' => __( 'Icon', 'stag' ),
			'desc'  => __( 'Choose an icon', 'stag' )
		),
		'url' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'URL', 'stag' ),
			'desc'  => __( 'Enter the URL where icon should be linked (optional)', 'stag' )
		),
		'new_window' => array(
			'type'    => 'select',
			'label'   => __( 'Open in new window', 'stag' ),
			'desc'    => __( 'Do you want to open the link in a new window?', 'stag' ),
			'options' => array(
				'no'  => __( 'No', 'stag' ),
				'yes' => __( 'Yes', 'stag' ),
			)
		),
		'size' => array(
			'std' => '14px',
			'type' => 'text',
			'label' => __( 'Font Size', 'stag' ),
			'desc' => __( 'Enter the icon&lsquo;s font size in px, em or %', 'stag' ),
		)
	),
	'shortcode' => '[icon icon="{{icon}}" url="{{url}}" size="{{size}}" new_window="{{new_window}}"]',
	'popup_title' => __( 'Insert Icon Shortcode', 'stag' )
);

$stag_shortcodes['map'] = array(
	'no_preview' => true,
	'params' => array(
		'lat' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Latitude', 'stag' ),
			'desc'  => __( 'Enter the place latitude coordinate. E.g.: 37.42200', 'stag' )
		),
		'long' => array(
			'std'   => '',
			'type'  => 'text',
			'label' => __( 'Longitude', 'stag' ),
			'desc'  => sprintf( __( 'Enter the place longitude coordinate. E.g.: -122.08395. You may find longitude and latitude <a href="%1$s" target="_blank">here</a>.', 'stag' ), esc_url('http://universimmedia.pagesperso-orange.fr/geo/loc.htm') )
		),
		'width' => array(
			'std'   => '100%',
			'type'  => 'text',
			'label' => __( 'Width', 'stag' ),
			'desc'  => __( 'Enter the map width.', 'stag' )
		),
		'height' => array(
			'std'   => '350px',
			'type'  => 'text',
			'label' => __( 'Height', 'stag' ),
			'desc'  => __( 'Enter the map height.', 'stag' )
		),
		'zoom' => array(
			'std'   => '15',
			'type'  => 'text',
			'label' => __( 'Zoom Level', 'stag' ),
			'desc'  => __( 'Enter the map zoom level between 0-21. Highest value zooms in and lowest zooms out.', 'stag' )
		),
		'style' => array(
			'std'     => 'none',
			'type'    => 'select',
			'label'   => __( 'Map Style', 'stag' ),
			'desc'    => __( 'Select from a list of predefined map styles.', 'stag' ),
			'options' => array(
				'none'             => __( 'None', 'stag' ),
				'pale_dawn'        => __( 'Pale Dawn', 'stag' ),
				'subtle_grayscale' => __( 'Subtle Grayscale', 'stag' ),
				'bright_bubbly'    => __( 'Bright & Bubbly', 'stag' ),
				'greyscale'        => __( 'Greyscale', 'stag' ),
				'mixed'            => __( 'Mixed', 'stag' )
			)
		),
	),
	'shortcode'   => '[stag_map lat="{{lat}}" long="{{long}}" width="{{width}}" height="{{height}}" style="{{style}}" zoom="{{zoom}}"]',
	'popup_title' => __( 'Insert Google Map Shortcode', 'stag' )
);

/**
 * Process only if the plugin Stag Custom Sidebar is active
 *
 * @since 1.1
 * @link http://wordpress.org/plugins/stag-custom-sidebars
 */
if ( $stagtools->is_scs_active() ) {
	$option = get_option('stag_custom_sidebars');

	$sidebars = array();

	if ( $option ) : // if there is more than one sidebar
	foreach ( $option as $key => $val ) {
		$sidebars[sanitize_html_class( sanitize_title_with_dashes( $val ) )] = $val;
	}
	endif;

	$stag_shortcodes['widget_area'] = array(
		'no_preview' => true,
		'params' => array(
			'id' => array(
				'type'    => 'select',
				'label'   => __( 'Choose Widget Area', 'stag' ),
				'desc'    => __( 'Choose which sidebar area you want to display.', 'stag' ),
				'options' => $sidebars
			),
			'class' => array(
				'std'   => '',
				'type'  => 'text',
				'label' => __( 'Class', 'stag' ),
				'desc'  => __( 'Enter Class name, if you want to use one on frontend.', 'stag' )
			)
		),
		'shortcode' => '[stag_sidebar id="{{id}}" class="{{class}}"]',
		'popup_title' => __( 'Insert Google Map Shortcode', 'stag' )
	);
}
