<?php
$imagedir = get_template_directory_uri().'/assets/images/';
if(anchro_option('logo_panel')!=''){
$logo_panel = wp_kses_post(anchro_option('logo_panel'));
}else{
$logo_panel = $imagedir.'logo_black.png';
}
$the_options =  array(
	'title' => esc_html__('anchro Option Panel', 'anchro'),
	'logo' => $logo_panel,
	'menus' => array(
		array(
			'title' => esc_html__('General Settings', 'anchro'),
			'name' => 'general',
			'icon' => 'font-awesome:fa-home',
			'menus' => array(
				array(
					'title' => esc_html__('Logo', 'anchro'),
					'name' => 'logo',
					'icon' => 'font-awesome:fa-angle-right',
					'controls' => array(
						array(
							'type' => 'upload',
							'name' => 'logo_imga',
							'label' => esc_html__('Logo A image', 'anchro'),
							'description' => esc_html__('Upload your own logo (for dark background).', 'anchro'),
							'default' => $imagedir . 'logo_white.png',
						),array(
							'type' => 'upload',
							'name' => 'logo_imgb',
							'label' => esc_html__('Logo B image', 'anchro'),
							'description' => esc_html__('Upload your own logo (for white background).', 'anchro'),
							'default' => $imagedir . 'logo_black.png',
						),array(
							'type' => 'upload',
							'name' => 'logoa_alt_retina',
							'label' => esc_html__('Alternative Logo A Image (Retina Version)', 'anchro'),
							'description' => esc_html__('Please name your file following the  (e.g. logo_black.png) with a suffix @2x (e.g. logo_black@2x.png)', 'anchro'),
						),array(
							'type' => 'upload',
							'name' => 'logob_alt_retina',
							'label' => esc_html__('Alternative Logo B Image (Retina Version)', 'anchro'),
							'description' => esc_html__('Please name your file following the  (e.g. logo_white.png) with a suffix @2x (e.g. logo_white@2x.png)', 'anchro'),
						),array(
							'type' => 'upload',
							'name' => 'logo_panel',
							'label' => esc_html__('Logo for this admin pagel', 'anchro'),
							'description' => esc_html__('Logo for this admin pagel', 'anchro'),
							'default' => $imagedir . 'logo_black.png',
						)
					),
				),
				array(
					'title' => esc_html__('General', 'anchro'),
					'name' => 'general',
					'icon' => 'font-awesome:fa-angle-right',
					'controls' => array(	
						array(
							'type' => 'toggle',
							'name' => 'responsive_mode',
							'label' => esc_html__('Responsive/mobile design', 'anchro'),
							'description' => esc_html__('Enable this to adapt your page to differents screen sizes(mobile, tablet, desktop, etc).', 'anchro'),
							'default' => '1',
						),					
						array(
							'type' => 'textbox',
							'name' => 'feedburner',
							'label' => esc_html__('Feedburner URL', 'anchro'),
							'description' => esc_html__('Enter your full FeedBurner URL to replace the default feed URL by Wordpress.', 'anchro'),
							'default' => '',
						),array(
							'type' => 'toggle',
							'name' => 'apply_custom_colors',
							'label' => esc_html__('Change the Primary Color', 'anchro'),
							'description' => esc_html__('Enable this to apply the following custom color).', 'anchro'),
							'default' => '0',
						),array(
							'type' => 'color',
							'name' => 'pri_c',
							'label' => esc_html__('Custom primary color', 'anchro'),
							'description' => esc_html__('Custom primary color.', 'anchro'),
							'default' => '#f5be34',
						),array(
							'type' => 'color',
							'name' => 'btn_c',
							'label' => esc_html__('Button Text Color', 'anchro'),
							'description' => esc_html__('', 'anchro'),
							'default' => '#343434',
						)
					),
				)
				,array(
					'title' => esc_html__('404 Page', 'anchro'),
					'name' => '404page',
					'icon' => 'font-awesome:fa-angle-right',
					'controls' => array(
						
						array(
							'type' => 'textbox',
							'name' => '404_text',
							'label' => esc_html__('Text in 404 page', 'anchro'),
							'default' => 'We couldn\'t find it, you can return to the main page and try again.',
						)
						,array(
							'type' => 'upload',
							'name' => 'bg_404',
							'label' => esc_html__('Background image for the 404 page', 'anchro'),
							'description' => esc_html__('Background image for the 404 page(1400 x 180 px)', 'anchro'),
							'default' =>  '',
						)
					),	
					
				),
			),
		),
		
		array(
			'type' => 'section',
			'title' => esc_html__('Header', 'anchro'),
			'icon' => 'font-awesome:fa-car',
			'controls' => array(
				array(
					'type' => 'upload',
					'name' => 'general_bg',
					'label' => esc_html__('General header Background', 'anchro'),
					'description' => esc_html__('Upload a image for the general background in header, (2048 x 860 px or similar proportion).', 'anchro'),
					'default' => $imagedir.'heading-bg.jpg',
				),array(
					'type' => 'color',
					'name' => 'general_bg_color',
					'label' => esc_html__('Background color (if not background image)', 'anchro'),
					'description' => esc_html__('Choose the general color background in header, (if not background image).', 'anchro'),
					'default' => '#232124',
				),array(
					'type' => 'toggle',
					'name' => 'search_top',
					'label' => esc_html__('Show Search icon in top', 'anchro'),
					'description' => esc_html__('Show Search icon in top next to social icons.', 'anchro'),
					'default' => '1',
				),array(
					'type' => 'textbox',
					'name' => 'search_top_label',
					'label' => esc_html__('Placeholder label in serarch top box', 'anchro'),
					'description' => esc_html__('Placeholder label in serarch top box.', 'anchro'),
					'default' => 'Type to search',
				)
			),
		),
		
		
		
		array(
			'type' => 'section',
			'title' => esc_html__('Labels', 'anchro'),
			'icon' => 'font-awesome:fa-credit-card',
			'controls' => array(
				array(
					'type' => 'textbox',
					'name' => 'label_blog',
					'label' => esc_html__('Blog label', 'anchro'),
					'default' => 'OUR BLOG',
				),array(
					'type' => 'textbox',
					'name' => 'blog_desc',
					'label' => esc_html__('Blog Description', 'anchro'),
					'description' => esc_html__('Blog Description', 'anchro'),
					'default' => 'HERE ARE OUR LATEST BLOG POSTS',
				),array(
					'type' => 'textbox',
					'name' => 'label_category',
					'description' => esc_html__('%s is for the category name', 'anchro'),
					'label' => esc_html__('Post Category Archive Title', 'anchro'),
					'default' => 'Posts in Category: %s',
				),
				array(
					'type' => 'textbox',
					'name' => 'label_tag',
					'description' => esc_html__('%s is for the tag name', 'anchro'),
					'label' => esc_html__('Post Tag Archive Title', 'anchro'),
					'default' => 'Posts Tagged Under: %s',
				),
				array(
					'type' => 'textbox',
					'name' => 'label_time_year',
					'description' => esc_html__('%s is for the year', 'anchro'),
					'label' => esc_html__('Yearly Archive Title', 'anchro'),
					'default' => 'Posts in: %s',
				),
				array(
					'type' => 'textbox',
					'name' => 'label_time_month',
					'description' => esc_html__('%s is for the month', 'anchro'),
					'label' => esc_html__('Monthly Archive Title', 'anchro'),
					'default' => 'Posts in: %s',
				),
				array(
					'type' => 'textbox',
					'name' => 'label_time_day',
					'description' => esc_html__('%s is for the day', 'anchro'),
					'label' => esc_html__('Daily Archive Title', 'anchro'),
					'default' => 'Posts in: %s',
				),
				array(
					'type' => 'textbox',
					'name' => 'label_search',
					'description' => esc_html__('First %s is for total results found, the second %s is for the query', 'anchro'),
					'label' => esc_html__('Search Result Title', 'anchro'),
					'default' => 'Search Results for: %s',
				),array(
					'type' => 'textbox',
					'name' => 'label_search_p',
					'description' => esc_html__('Placeholder for the search form in the top bar.', 'anchro'),
					'label' => esc_html__('Search form top placeholder', 'anchro'),
					'default' => 'Search here',
				),array(
					'type' => 'textbox',
					'name' => 'read_more_label',
					'description' => esc_html__('Read more label for excerpts in blog/archive.', 'anchro'),
					'label' => esc_html__('Read more label', 'anchro'),
					'default' => 'CONTINUE READING',
				),array(
					'type' => 'textbox',
					'name' => 'sticky_label',
					'description' => esc_html__('Sticky label at side of the title post in blog/archive.', 'anchro'),
					'label' => esc_html__('Sticky label', 'anchro'),
					'default' => 'Featured',
				),array(
					'type' => 'textbox',
					'name' => 'portfolio_categories_label',
					'description' => esc_html__('Label title for categories of custom posts. the %s is for the category name of the custom posts', 'anchro'),
					'label' => esc_html__('Label categories of support posts', 'anchro'),
					'default' => 'Portfolio Category: %s',
				),array(
					'type' => 'textbox',
					'name' => 'portfolio_archive_title',
					'description' => esc_html__('Label title for Portfolio custom post - Archive', 'anchro'),
					'label' => esc_html__('Label title for Portfolio Archive', 'anchro'),
					'default' => 'Portfolio Archive',
				),array(
					'type' => 'textbox',
					'name' => 'untitled',
					'description' => esc_html__('Title for Untitled Posts in blog/archive.', 'anchro'),
					'label' => esc_html__('Title for Untitled posts', 'anchro'),
					'default' => '(UNTITLED)',
				)
			),
		),
		
		array(
			'type' => 'section',
			'title' => esc_html__('Blog/Archive Settings', 'anchro'),
			'icon' => 'font-awesome:fa-list-ul',
			'controls' => array(
				array(
					'name'=>'word_limit',
					'type' => 'textbox', 
					'label' => esc_html__('Word Limit Excerpt Classic', 'anchro'),
					'description' => esc_html__('Set a limit number of words for each excerpt in blog.', 'anchro'),
					'default' => '23',
				),array(
					'name'=>'word_limitb',
					'type' => 'textbox', 
					'label' => esc_html__('Word Limit Excerpt Grid', 'anchro'),
					'description' => esc_html__('Set a limit number of words for each excerpt in blog.', 'anchro'),
					'default' => '20',
				),array(
					'type' => 'toggle',
					'name' => 'auto_thumbnail',
					'label' => esc_html__('Show Post Thumbnail automaticaly', 'anchro'),
					'description' => esc_html__('Show Post Thumbnail automaticaly.', 'anchro'),
					'default' => 1,
				),array(
					'type' => 'radiobutton',
					'name' => 'blog_type',
					'label' => esc_html__('Blog/archive Style:', 'anchro'),
					'description' => esc_html__('Blog/archive Style ', 'anchro'),
					'items' => array(
						array(
							'value' => 'classic',
							'label' => esc_html__('Classic', 'anchro'),
						),
						array(
							'value' => 'grid',
							'label' => esc_html__('Grid', 'anchro'),
						),								
					),
					'default' => array(
						'classic',
					),
				),
				array(
					'label' => esc_html__('Disable double column in some widgets', 'anchro'),
					'name'=>'disable_two_col',
					'description' => esc_html__('disable double column in some widgets (only in widgets type lists.)', 'anchro'),
					'type' => 'toggle', 
					"default" => 0,
				)
			),
		),
		
		
		
		
		
		array(
			'title' => esc_html__('Single Post/Page', 'anchro'),
			'icon' => 'font-awesome:fa-file-text-o',
			'controls' => array(
				array(
					'type' => 'section',
					'title' => esc_html__('Posts', 'anchro'),
					'fields' => array(
						array(
							'type' => 'toggle',
							'name' => 'auto_thumbnail_post',
							'label' => esc_html__('Show Post Thumbnail automaticaly', 'anchro'),
							'description' => esc_html__('Show Post Thumbnail automaticaly.', 'anchro'),
							'default' => 1,
						),array(
							'type' => 'toggle',
							'name' => 'title_if_nosubtitle',
							'description' => esc_html__('Show title if there is not subtitle in single posts.', 'anchro'),
							'label' => esc_html__('Show post title if there is not subtitle', 'anchro'),
							'default' => 0,
						),array(
							'type' => 'toggle',
							'name' => 'show_category',
							'description' => esc_html__('Show category in meta posts.', 'anchro'),
							'label' => esc_html__('Show category in meta posts', 'anchro'),
							'default' => 1,
						),array(
							'type' => 'toggle',
							'name' => 'show_tag',
							'description' => esc_html__('Show tag in meta posts.', 'anchro'),
							'label' => esc_html__('Show tag in meta posts', 'anchro'),
							'default' => 1,
						),
					)
				),array(
					'type' => 'section',
					'title' => esc_html__('Pages', 'anchro'),
					'fields' => array(
						array(
							'type' => 'toggle',
							'name' => 'social_page',
							'label' => esc_html__('Show Social Icons In Pages', 'anchro'),
							'description' => esc_html__('Show Social Icons In Pages.', 'anchro'),
							'default' => 1,
						),
						array(
							'type' => 'toggle',
							'name' => 'h_comments_page',
							'label' => esc_html__('Hide Comments section in Page', 'anchro'),
							'description' => esc_html__('turn on if you want to Hide comments in pages.', 'anchro'),
							'default' => '0',
						)
					)
				)
			),
		),
		
		array(
			'type' => 'section',
            'title' => esc_html__('Share Post', 'anchro'),
            'icon' => 'font-awesome:fa-share-square-o',
            'controls' => array(
				array(
					'label' => esc_html__('Facebook', 'anchro'),
					'name'=>'facebook_share',
					'type' => 'toggle', 
					"default" => 1,
				),array(
					'label' => esc_html__('Twitter', 'anchro'),
					'name'=>'twitter_share',
					'type' => 'toggle', 
					"default" => 1,
				),array(
					'label' => esc_html__('Linkedin', 'anchro'),
					'name'=>'linkedin_share',
					'type' => 'toggle', 
					"default" => 0,
				),array(
					'label' => esc_html__('Pinterest', 'anchro'),
					'name'=>'pinterest_share',
					'type' => 'toggle', 
					"default" => 1,
				),array(
					'label' => esc_html__('GooglePlus', 'anchro'),
					'name'=>'googlep_share',
					'type' => 'toggle', 
					"default" => 1,
				),array(
					'label' => esc_html__('Reddit', 'anchro'),
					'name'=>'reddit_share',
					'type' => 'toggle', 
					"default" => 0,
				),array(
					'label' => esc_html__('Mail', 'anchro'),
					'name'=>'mail_share',
					'type' => 'toggle', 
					"default" => 0,
				),array(
					'label' => esc_html__('Tumblr', 'anchro'),
					'name'=>'tumblr_share',
					'type' => 'toggle', 
					"default" => 0,
				)
			),
		),
		
		
		array(
			'type' => 'section',
            'title' => esc_html__('Banner below pages', 'anchro'),
            'icon' => 'font-awesome:fa-share-square-o',
            'controls' => array(
				array(
					'type' => 'toggle',
					'name' => 'banner_in_blog',
					'label' => esc_html__('Show Action Banner Below blogs', 'anchro'),
					'default' => '1',
				),array(
					'type' => 'toggle',
					'name' => 'banner_in_post',
					'label' => esc_html__('Show Action Banner Below Pages(default template)', 'anchro'),
					'default' => '1',
				),array(
					'type' => 'toggle',
					'name' => 'banner_in_pages',
					'label' => esc_html__('Show Action Banner Below posts', 'anchro'),
					'default' => '1',
				),array(
					'type' => 'toggle',
					'name' => 'banner_in_pages_fw',
					'label' => esc_html__('Show Action Banner Below Page(full width template)', 'anchro'),
					'default' => '1',
				),array(
					'type' => 'toggle',
					'name' => 'banner_in_portfolio',
					'label' => esc_html__('Show Action Banner Below Portfolio Items', 'anchro'),
					'default' => '1',
				),array(
					'type' => 'upload',
					'name' => 'banner_image',
					'label' => esc_html__('Image Background Banner', 'anchro'),
					'default' => '',
				),array(
					'type' => 'wpeditor',
					'name' => 'banner_in_blog_content',
					'label' => __('Content Banner', 'anchro'),
					'description' => __('Text for banner below post/pages .', 'anchro'),
					'use_external_plugins' => '0',
					'disabled_externals_plugins' => '',
					'disabled_internals_plugins' => '',
					'default' => '<h1><em>Anchro</em> is architecture &amp; multipurpose html template</h1><div class="white-button"><a href="#">Purchase Now</a></div>',
				)
			),
		),
		

		array(
			'title' => esc_html__('Footer', 'anchro'),
			'icon' => 'font-awesome:fa-building',
			'controls' => array(	
				array(
					'name'=>'copyrights',
					'type' => 'textarea', 
					'label' => esc_html__('Copyrights', 'anchro'),
					'default' => '&copy; 2016 CocoTemplates. All Rights Reserved'
				),
				array(
					'type' => 'slider',
					'name' => 'width_foo1',
					'label' => esc_html__('Width footer widget 1', 'anchro'),
					'min' => '0',
					'max' => '12',
					'step' => '1',
					'default' => '4',
				),
				array(
					'type' => 'slider',
					'name' => 'width_foo2',
					'label' => esc_html__('Width footer widget 2', 'anchro'),
					'min' => '0',
					'max' => '12',
					'step' => '1',
					'default' => '5',
				),
				array(
					'type' => 'slider',
					'name' => 'width_foo3',
					'label' => esc_html__('Width footer widget 3', 'anchro'),
					'min' => '0',
					'max' => '12',
					'step' => '1',
					'default' => '3',
				)
			),
		),
		
		array(
			'title' => esc_html__('Custom Codes', 'anchro'),
			'name' => 'custom_codes',
			'icon' => 'font-awesome:fa-code',
			'controls' => array(
				array(
					'type' => 'codeeditor',
					'name' => 'custom_css',
					'label' => esc_html__('Custom CSS', 'anchro'),
					'description' => esc_html__('Write your custom css here.', 'anchro'),
					'theme' => 'github',
					'mode' => 'css',
				),
				array(
					'type' => 'codeeditor',
					'name' => 'custom_js',
					'label' => esc_html__('Custom JavaScript', 'anchro'),
					'description' => esc_html__('Write your custom js here.', 'anchro'),
					'theme' => 'twilight',
					'mode' => 'javascript',
				),
			),
		),
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    ),

);

return $the_options;
?>