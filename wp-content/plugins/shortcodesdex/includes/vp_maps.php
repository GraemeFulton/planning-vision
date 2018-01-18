<?php 


function my_shortcodes_vc() {
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Title Middle" , "anchro" ),
		"base"	=> "section_heading_middle",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(			
			array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			),
			),
	
		) 
	);
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Title Left" , "anchro" ),
		"base"	=> "section_heading_left",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(			
			array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			),array(
				"type" => "textfield",
				"heading" => __("Class", "anchro"),
				"param_name" => "class",
			)
			),
	
		) 
	);
	
	
	

	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Service Item 1" , "anchro" ),
		"base"	=> "service_item",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(
			array(
				"type" => "textfield",
				"heading" => __("Image", "anchro"),
				"param_name" => "image",
				"description"	=> __( "this will be overrided if you set a icon below", "anchro" ),
			),
			array(
				"type" => "textfield",
				"heading" => __("Title", "anchro"),
				"param_name" => "title",
				"holder" => "div",
			),array(
				"type" => "iconpicker",
				"heading" => __("Icon", "anchro"),
				"param_name" => "icon",
			),
			array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			),
			),
	
		) 
	);
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Service Item 2" , "anchro" ),
		"base"	=> "service_b",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(
			array(
				"type" => "textfield",
				"heading" => __("Image", "anchro"),
				"param_name" => "image",
				"description"	=> __( "this will be overrided if you set a icon below", "anchro" ),
			),
			array(
				"type" => "textfield",
				"heading" => __("Title", "anchro"),
				"param_name" => "title",
				"holder" => "div",
			),array(
				"type" => "iconpicker",
				"heading" => __("Icon", "anchro"),
				"param_name" => "icon",
			),
			array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			),
			),
	
		) 
	);
	

	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Projects Carousel" , "anchro" ),
		"base"	=> "projects_carousel",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(			
			array(
				"type" => "textfield",
				"heading" => __("Limit", "anchro"),
				"param_name" => "limit",
			),
			),
	
		) 
	);
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Blog Embed" , "anchro" ),
		"base"	=> "blog_embed",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(			
			array(
				"type" => "textfield",
				"heading" => __("Class", "anchro"),
				"param_name" => "class",
			)
			),	
		) 
	);
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Testimonial Slider" , "anchro" ),
		"base"	=> "testimonial_slider",
		"description"	=> __( "Theme Element", "anchro" ),
		"is_container"	=> true,
		"js_view"	=> "VcColumnView",
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"as_parent"	=> array("only" => "testimonial_item"),
		"params"	=> array(
			array(
				"type" => "textfield",
				"heading" => __("Class", "anchro"),
				"param_name" => "class",
				"holder" => "div",
			)
			),	
		) 
	);
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Testimonial Item" , "anchro" ),
		"base"	=> "testimonial_item",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(			
			array(
				"type" => "textfield",
				"heading" => __("Role", "anchro"),
				"param_name" => "role",
			),array(
				"type" => "textfield",
				"heading" => __("Author", "anchro"),
				"param_name" => "author",
			),
			array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			),
			),
	
		) 
	);
	
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Member Item" , "anchro" ),
		"base"	=> "member_item",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(	
			array(
				"type" => "textfield",
				"heading" => __("Link", "anchro"),
				"param_name" => "link",
			),array(
				"type" => "textfield",
				"heading" => __("Image", "anchro"),
				"param_name" => "image",
			),array(
				"type" => "textfield",
				"heading" => __("Name", "anchro"),
				"param_name" => "name",
				"holder" => "div",
			),array(
				"type" => "textfield",
				"heading" => __("Role", "anchro"),
				"param_name" => "role",
			),array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			)
			),
	
		) 
	);
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Contact Item" , "anchro" ),
		"base"	=> "contact_item",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(	
			array(
				"type" => "iconpicker",
				"heading" => __("Icon", "anchro"),
				"param_name" => "icon",
			),array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			)
			),
	
		) 
	);
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Fact Item" , "anchro" ),
		"base"	=> "fact_item",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(	
			array(
				"type" => "textfield",
				"heading" => __("Number", "anchro"),
				"param_name" => "number",
			),array(
				"type" => "textfield",
				"heading" => __("Label", "anchro"),
				"param_name" => "label",
			)
			),
	
		) 
	);
	
	
	
	vc_map( 
		array(
		"icon" => "",
		"name"	=> __( "Project Slider" , "anchro" ),
		"base"	=> "project_slider",
		"description"	=> __( "Theme Element", "anchro" ),
		"content_element"	=> true,
		"category"	=> __(" anchro", "anchro"),
		"params"	=> array(			
			array(
				"type" => "textarea",
				"heading" => __("Content", "anchro"),
				"param_name" => "content",
			)
			),
	
		) 
	);
	

}
add_action( "vc_before_init", "my_shortcodes_vc" );

if(class_exists("WPBakeryShortCodesContainer")){
    class WPBakeryShortCode_testimonial_slider extends WPBakeryShortCodesContainer {

    }
}


///////////////////////////////////////////////////
	
	