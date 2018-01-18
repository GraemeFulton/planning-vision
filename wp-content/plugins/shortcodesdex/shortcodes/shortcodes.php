<?php
/**
 * All Plugin Shortcodes
 */

if( ! function_exists( 'section' ) ):
function section( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id'        => '',
		'class'        => '',
		'bg_img'        => '',
	), $atts ) );
	///name: Section
	///slug: section
	///category: Generosity
	///childs: none
	///params: id,class,bg_img,content
	///is_container: true
	///is_child: no
	///content: true
	
	$id_attr = '';
	$style_attr = '';
	if($id != ''){
		$id_attr = 'id="'.$id.'"';
	}
	$style = '';
	if($bg_img!=''){
	$style = 'style="background-image:url('.$bg_img.')"';
	}
	
	return '<section '.$id_attr.' class="section '.$class.'" '.$style.'><div class="container">'.  do_shortcode( $content ) .'</div></section>';
	
	
	
}
add_shortcode( 'section', 'section' );
endif;




if( ! function_exists( 'row' ) ):
function row( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
	), $atts ) );
	return '<div class="row '.$class.'">' .  do_shortcode( $content )  . '</div>';
}
add_shortcode( 'row', 'row' );
endif;



/**
 * Columns
 */
 if( ! function_exists('column' ) ) :
function column( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',		
    ), $atts));
	
	
	

	
	return '<div class="'.$class.'" >' . (do_shortcode($content)) . '</div>';
}
add_shortcode('column', 'column');
endif;


 if( ! function_exists('inner_column' ) ) :
function inner_column( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',		
    ), $atts));
	
	return '<div class="'.$class.'" >' . cleanpp(do_shortcode($content)) . '</div>';
}
add_shortcode('inner_column', 'inner_column');
endif;



 if( ! function_exists('div' ) ) :
function div( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',		
    ), $atts));
	
	
	

	
	return '<div class="'.$class.'" >' . do_shortcode($content) . '</div>';
}
add_shortcode('div', 'div');
endif;


 if( ! function_exists('inner_div' ) ) :
function inner_div( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',		
    ), $atts));	
		
	return '<div class="'.$class.'" >' . do_shortcode($content) . '</div>';
}
add_shortcode('inner_div', 'inner_div');
endif;



 if( ! function_exists('section_heading_middle' ) ) :
function section_heading_middle( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',
		'icon' => '',
    ), $atts));	
	$be='';
	
	$af = '<img src="'.get_template_directory_uri().'/assets/images/icon_small.png" alt="">';
	
	
	return '<div class="row">
				<div class="col-md-12">
					<div class="section-heading-middle text-center '.esc_attr($class).'">
						'.$be . cleanp($content) . $af. '
					</div>
				</div>
			</div>';
}
add_shortcode('section_heading_middle', 'section_heading_middle');
endif;


 if( ! function_exists('section_heading_left' ) ) :
function section_heading_left( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',
		'icon' => '',
    ), $atts));	
	
	$af='';
	$be = '<img src="'.get_template_directory_uri().'/assets/images/icon_big.png" alt="">';
	
	
	return '<div class="row">
				<div class="col-md-12">
					<div class="section-heading-left text-left '.esc_attr($class).'">
						'.$be . cleanpp(do_shortcode($content)) . $af. '
					</div>
				</div>
			</div>';
}
add_shortcode('section_heading_left', 'section_heading_left');
endif;





 if( ! function_exists('accent_button' ) ) :
function accent_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'label' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	return '<div class="accent-button"><a href="'.esc_url($url).'">'.esc_html($label).'</a></div>';
}
add_shortcode('accent_button', 'accent_button');
endif;



 if( ! function_exists('white_button' ) ) :
function white_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'label' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	return '<div class="white-button"><a href="'.esc_url($url).'">'.esc_html($label).'</a></div>';
}
add_shortcode('white_button', 'white_button');
endif;

 if( ! function_exists('slider_button' ) ) :
function slider_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'label' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	return '<div class="slider-button"><a href="'.esc_url($url).'">'.esc_html($label).'</a></div>';
}
add_shortcode('slider_button', 'slider_button');
endif;



 if( ! function_exists('service_item' ) ) :
function service_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'image' => '',
		'title' => '',
		'icon' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	if($icon!=''){
		return '<div class="service-item">
				<div class="service-icon"><i class="fa fa-'.esc_attr($icon).'"></i></div>
				<h4>'.$title.'</h4>
				<div class="line-dec"></div>
				<p>' . do_shortcode($content) . '</p>
			</div>';
	}
	return '<div class="service-item">
				<img src="'.($image).'" alt="">
				<h4>'.$title.'</h4>
				<div class="line-dec"></div>
				<p>' . do_shortcode($content) . '</p>
			</div>';
}
add_shortcode('service_item', 'service_item');
endif;


 if( ! function_exists('service_b' ) ) :
function service_b( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'url' => '#',
		'image' => '',
		'icon' => '',
		'title' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	if($icon!=''){
	
	return '<div class="second-service-item">
				<div class="service-iconb"><i class="fa fa-'.esc_attr($icon).'"></i></div>
				<h4>'.$title.'</h4>
				<div class="line-dec"></div>
				<p>' . do_shortcode($content) . '</p>
			</div>';
	}
	return '<div class="second-service-item">
				<img src="'.($image).'" alt="">
				<h4>'.$title.'</h4>
				<div class="line-dec"></div>
				<p>' . do_shortcode($content) . '</p>
			</div>';
}
add_shortcode('service_b', 'service_b');
endif;



 if( ! function_exists('member_item' ) ) :
function member_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'link' => '#',
		'image' => '',
		'name' => '',
		'role' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	
	
	
	
	
	return '<div class="member-item">
			<figure>
				<a href="'.$link.'"><img alt="team-member" src="'.$image.'"></a>
				<figcaption>
					'. cleanp($content) .'
				</figcaption>
			</figure>		
			<div class="down-content">
				<h3>'.$name.'</h3>
				<span>'.$role.'</span>
			</div>						    
		</div>';
}
add_shortcode('member_item', 'member_item');
endif;

 if( ! function_exists('fact_item' ) ) :
function fact_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'number' => '#',
		'label' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	
	return '<div class="fact-item">
	  <div class="count-number" data-count="'.$number.'">
		<span class="count-focus">'.$number.'</span>
	  </div>
	  <div class="line-dec"></div>
	  <span class="fact-role">'.$label.'</span>
	</div>';
	
}
add_shortcode('fact_item', 'fact_item');
endif;

 if( ! function_exists('contact_item' ) ) :
function contact_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'icon' => '#',
		'label' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	
	return '<div class="contact-item">
				<i class="fa fa-'.$icon.'"></i>
				<span>'. do_shortcode($content) .'</span>
			</div>';
	
}
add_shortcode('contact_item', 'contact_item');
endif;


 if( ! function_exists('google_map' ) ) :
function google_map( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',
		'address' => '',
		'title' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	
	return '<div class="content-map"><div class="contact-map" data-address="'.esc_attr($address).'" style="height: 420px;"></div></div>';
}
add_shortcode('google_map', 'google_map');
endif;


 if( ! function_exists('direction_buttons' ) ) :
function direction_buttons( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'previous' => 'Prev Project',
		'next' => 'Next Project',
		'title' => '',

    ), $atts));
	///name: Join us box
	///slug: join_us_box
	///category: Generosity
	///childs: none
	///params: icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: true
	ob_start();  
	?>
	<div class="pagination-buttons">
	<?php previous_post_link('<div class="black-button first-button">%link</div>',esc_html($previous)); ?>
	<?php next_post_link('<div class="black-button second-button">%link</div>',esc_html($next)); ?>
	</div>
	<?php 
	$ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;   
}
add_shortcode('direction_buttons', 'direction_buttons');
endif;



if( ! function_exists( 'projects_grid' ) ):
function projects_grid( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'limit' => '',
		'ids' => '',
		'columns' => '3'
		
	), $atts ) );
	///name: ProjectsCarousel
	///slug: projects_carousel
	///category: Generosity
	///childs: none
	///params: limit,ids
	///is_container: false
	///is_child: no
	///content: false
	
	
	ob_start();  
	include(locate_template('/include/projects_carousel.php'));
	anchro_projects_grid_f($limit,$ids,$columns);
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
add_shortcode( 'projects_grid', 'projects_grid' );
endif;

if( ! function_exists( 'project_slider' ) ):
function project_slider( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'limit' => '',
		'ids' => '',
		'columns' => '3'
		
	), $atts ) );
	///name: ProjectsCarousel
	///slug: projects_carousel
	///category: Generosity
	///childs: none
	///params: limit,ids
	///is_container: false
	///is_child: no
	///content: false
	
	
	return '<div class="slider">
									<div class="single-slider">
										<ul class="slides">'.makeslider($content).'</ul></div></div>' ;
}
add_shortcode( 'project_slider', 'project_slider' );
endif;


function makeslider($content_raw){
	$the_content = str_replace( array( '<p>' ), '', $content_raw );
	$the_content = str_replace( array( '</p>' ), '', $the_content );
	$the_content = str_replace( array( '<br />' ), '', $the_content );
	$the_content = preg_replace("[\n|\r|\n\r]", '', $the_content);
	$the_content= trim ($the_content);
	
	$ids = '';
	preg_match('/\[gallery.*ids=.(.*).\]/', $the_content, $ids);
	$gal_ids = Array();
	if(!empty($ids[0])){
		$gal_ids = explode(',', str_replace(' ', '', $ids[1]));
	}
	if (count($gal_ids) > 1) : 
		ob_start();
		foreach ($gal_ids as $gal_id) : 
		
		?>
		
		<li data-thumb="<?php echo wp_get_attachment_image_src($gal_id, 'anchro_project-thumbnail')[0]; ?>">
		  <?php echo wp_get_attachment_image($gal_id, 'full'); ?>
		</li>
		<?php 
		endforeach; 
		$ret = ob_get_contents();
		ob_end_clean();
		return $ret;
	endif;
	return "malo";
}

if( ! function_exists( 'button' ) ) :
function button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url'        => '#',
		'target'     => '_self',
		'style'      => 'grey',
		'size'       => 'small',
		'type'       => 'round',
		'icon'       => '',
		'icon_order' => 'before',
		'color' => '',
	), $atts ) );

	$button_icon = '';
	$class       = " stag-button--{$size}";
	$class       .= " stag-button--{$style}";
	$class       .= " stag-button--{$type}";

	if( ! empty($icon) ) {
		if ( $icon_order == 'before' ) {
			$button_content = stag_icon( array( 'icon' => $icon ) );
			$button_content .= do_shortcode($content);
		} else {
			$button_content = do_shortcode($content);
			$button_content .= stag_icon( array( 'icon' => $icon ) );
		}
		$class .= " fa-{$icon_order}";
	} else {
		$button_content = do_shortcode($content);
	}

	
	return '<a target="'.$target.'" href="'.$url.'" class="stag-button '. $class .'">'. $button_content .'</a>';
}
add_shortcode( 'button', 'button' );
endif;



if( ! function_exists( 'main_slider') ) :
function main_slider( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'background_color' => '#fff'
    ), $atts));
	return '<ul>' . cleanp($content) . '</ul>';
}
add_shortcode( 'main_slider', 'main_slider' );
endif;

if( ! function_exists( 'slider_item') ) :
function slider_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'img' => ''
    ), $atts));
	return '<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
		<img src="'.$img.'" data-fullwidthcentering="on" alt="slide">
		<div class="tp-caption first-line lfr tp-resizeme start" data-x="center" data-hoffset="0" data-y="center" data-speed="3000" data-start="500" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">' . do_shortcode($content) . '</div>
	</li>';
}
add_shortcode( 'slider_item', 'slider_item' );
endif;


if( ! function_exists( 'portfolio_embed' ) ):
function portfolio_embed( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'limit' => '',
	'load_more' => '',
	'rand' => '',
	), $atts ) );
	///name: PortfolioEmbed
	///slug: portfolio_embed
	///category: Generosity
	///childs: none	
	///is_container: false
	///is_child: no
	///content: true
	///settings: false
	
	$limit_inc = $limit;
	$show_load_more_inc = $load_more;
	$rand_inc = $rand;
	ob_start();  
    //get_template_part('content', 'portfolio-script');  
	include(locate_template('content-portfolio-script.php'));
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
add_shortcode( 'portfolio_embed', 'portfolio_embed' );
endif;


if( ! function_exists( 'projects_carousel' ) ):
function projects_carousel( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'limit' => '',
		'ids' => ''
		
	), $atts ) );
	///name: ProjectsCarousel
	///slug: projects_carousel
	///category: Generosity
	///childs: none
	///params: limit,ids
	///is_container: false
	///is_child: no
	///content: false
	
	ob_start();  
	include(locate_template('/include/projects_carousel.php'));
	anchro_projects_carousel_f($limit,$ids);
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
add_shortcode( 'projects_carousel', 'projects_carousel' );
endif;


if( ! function_exists( 'blog_embed' ) ):
function blog_embed( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'limit' => '',
		'ids' => ''
		
	), $atts ) );
	///name: ProjectsCarousel
	///slug: projects_carousel
	///category: Generosity
	///childs: none
	///params: limit,ids
	///is_container: false
	///is_child: no
	///content: false
	
	ob_start();  
	include(locate_template('/include/blog_embed.php'));
	anchro_blog_embed($limit,$ids);
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
add_shortcode( 'blog_embed', 'blog_embed' );
endif;

if( ! function_exists( 'blog_grid_embed' ) ):
function blog_grid_embed( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'limit' => '',
		'ids' => ''
		
	), $atts ) );
	///name: ProjectsCarousel
	///slug: projects_carousel
	///category: Generosity
	///childs: none
	///params: limit,ids
	///is_container: false
	///is_child: no
	///content: false
	$embed = true;
	ob_start();  
	include(locate_template('/template-blog-grid.php'));
	
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
add_shortcode( 'blog_grid_embed', 'blog_grid_embed' );
endif;

if( ! function_exists( 'projects_embed' ) ):
function projects_embed( $atts, $content = null ) {
	extract( shortcode_atts( array(
	), $atts ) );

	ob_start();  
    get_template_part('content', 'project-script');  
    $ret = ob_get_contents();  
    ob_end_clean();  
    return $ret;    
}
add_shortcode( 'projects_embed', 'projects_embed' );
endif;





if( ! function_exists( 'container_full') ) :
function container_full( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'title' => '',
		'icon_right' => '',
		'text_right' => '',
		'link_right' => '#',
		
    ), $atts));
	return '<div class="container container-title">
			<h1 class="block-title">'.$title.'</h1>
		</div>';
}
add_shortcode( 'container_full', 'container_full' );
endif;

if( ! function_exists( 'block_title_container') ) :
function block_title_container( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'title' => '',
		'icon_right' => '',
		'text_right' => '',
		'link_right' => '#',
		
    ), $atts));
	return '<div class="container container-title">
				<h1 class="block-title">'.$title.'</h1>
			</div>';
}
add_shortcode( 'block_title_container', 'block_title_container' );
endif;

if( ! function_exists( 'block_title') ) :
function block_title( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'title' => '',
		'icon_right' => '',
		'text_right' => '',
		'link_right' => '#',
		'type' => '',
		
    ), $atts));
	///name: BlockTitle
	///slug: block_title
	///category: Generosity
	///childs: none
	///params: title,icon_right(iconpicker),text_right,link_right,type(dropdown)
	///is_container: false
	///is_child: no
	///content: false
	
	if($type=='gray'){
		return '<div class="container container-title">
				<h1 class="block-title">'.$title.'</h1>
			</div>';
	
	}elseif($type=='left'){
		return '<div class="block-title">
					<h1>'.$title.'</h1>
					<a href="'.$link_right.'" class="view-all"><i class="fa '.$icon_right.'"></i>'.$text_right.'</a>
				</div>';
	}else{
		return '<div class="block-title-c"><h1>'.$title.'</h1></div>';
	}
}
add_shortcode( 'block_title', 'block_title' );
endif;


if( ! function_exists( 'block_title_center') ) :
function block_title_center( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',
		'title' => '',
		'icon_right' => '',
		'text_right' => '',
		'link_right' => '#',
		
    ), $atts));
	///name: BlockTitleCenter
	///slug: block_title_center
	///category: Generosity
	///childs: none
	///params: title
	///is_container: false
	///is_child: no
	///content: false
	return '<div class="block-title-c '.$class.'"><h1>'.$title.'</h1></div>';
}
add_shortcode( 'block_title_center', 'block_title_center' );
endif;

if( ! function_exists( 'volunteer') ) :
function volunteer( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'grid' => '',
		'image' => '',
		'name' => '',
		'role' => '#',
		'class' => '',
		
    ), $atts));
	///name: Volunteer
	///slug: volunteer
	///category: Generosity
	///childs: none
	///params: name,image,role,class,content
	///is_container: false
	///is_child: no
	///content: false
	
	if($class=="center"){
		$content_0 = $content;
		$content_1 = "";
		$content_divided = explode("<!--social-->",$content);
		
		if(isset($content_divided[1])){
			$content_0 = $content_divided[0];
			$content_1 = $content_divided[1];
		}
							
		return '<div class="volunteer volunteer-centered">
									
									<div class="volunteer-info row">
									
										<!-- volunteer name/title -->
										<div class="col-md-4">
											<h4>'.$name.'</h4>
											<span class="role">'.$role.'</span>
										</div>
										
										<!-- volunteer photo -->
										<div class="col-md-4">
											<div class="volunteer-photo"><img src="'.$image.'" alt=""></div>
										</div>
										
										<!-- volunteer social media -->
										<div class="col-md-4">
											'.do_shortcode($content_1).'
										</div>
										
									</div>
									
									<!-- volunteer text -->
									' . $content_0 . '
								</div>';
	}else{
		return '<div class="col-md-'.$grid.' '.$class.'">		
					<div class="volunteer">
						<div class="volunteer-photo"><img src="'.$image.'" alt="" /></div>
						<div class="volunteer-info">
							<h4>'.$name.'</h4>
							<span class="role">'.$role.'</span>' . do_shortcode($content) . '</div></div></div>';
	}

}
add_shortcode( 'volunteer', 'volunteer' );
endif;


if( ! function_exists( 'volunteer_center') ) :
function volunteer_center( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'grid' => '',
		'image' => '',
		'name' => '',
		'role' => '#',
		
    ), $atts));
	
	$content_0 = $content;
	$content_1 = "";
	$content_divided = explode("<!--social-->",$content);
	
	if(isset($content_divided[1])){
		$content_0 = $content_divided[0];
		$content_1 = $content_divided[1];
	}
							
	return '<div class="volunteer volunteer-centered">
									
									<div class="volunteer-info row">
									
										<!-- volunteer name/title -->
										<div class="col-md-4">
											<h4>'.$name.'</h4>
											<span class="role">'.$role.'</span>
										</div>
										
										<!-- volunteer photo -->
										<div class="col-md-4">
											<div class="volunteer-photo"><img src="'.$image.'" alt=""></div>
										</div>
										
										<!-- volunteer social media -->
										<div class="col-md-4">
											'.$content_1.'
										</div>
										
									</div>
									
									<!-- volunteer text -->
									' . $content_0 . '
								</div>';
}
add_shortcode( 'volunteer_center', 'volunteer_center' );
endif;


if( ! function_exists( 'fact_box') ) :
function fact_box( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'icon' => '',
		'to' => '',
		'speed' => '',
		'label' => '#',
		
    ), $atts));
	return '<div class="fact-box">
					<div class="fact-title">
						<i class="fa '.$icon.'"></i>
						<span class="fact-number" data-to="'.$to.'" data-speed="'.$speed.'">'.$to.'</span>
						<span class="lead">'.$label.'</span>
					</div>
					<div class="fact-info">
						' . do_shortcode($content) . '
					</div>
				</div>';
}
add_shortcode( 'fact_box', 'fact_box' );
endif;




if( ! function_exists( 'testimonial_slider') ) :
function testimonial_slider( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'id' => '',
		'controls' => 'true'
    ), $atts));
	///name: TestimonialSlider
	///slug: testimonial_slider
	///category: Generosity
	///childs: testimonial_item
	///params: none
	///is_container: false
	///is_child: no
	///content: true
	
	return '<div id="owl-testimonials" class="owl-carousel owl-theme">' . do_shortcode($content) . '</div>';
	
}
add_shortcode( 'testimonial_slider', 'testimonial_slider' );
endif;


if( ! function_exists( 'testimonial_item') ) :
function testimonial_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'id' => '',
		'role' => '',
		'author' => '',
		'image' => '',
    ), $atts));
	///name: TestimonialItem
	///slug: testimonial_item
	///category: Generosity
	///childs: none
	///params: image,content
	///is_container: false
	///is_child: no
	///content: false
	
	return '<div class="item text-center">
				<div class="testimonial-item">
					<p>' . do_shortcode($content) . '</p>
					<h4>'.$author.'</h4>
					<span>'.$role.'</span>
				</div>
			</div>';
	
}
add_shortcode( 'testimonial_item', 'testimonial_item' );
endif;






if( ! function_exists( 'carousel_double_box') ) :
function carousel_double_box( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'id' => 'slideshow',
		'controls' => 'true'
    ), $atts));
	return '<div class="flexslider-carousel double-box-carousel animate fadeIn">
						<ul class="slides double-box-w">' . do_shortcode($content) . '</ul></div>';
	
}
add_shortcode( 'carousel_double_box', 'carousel_double_box' );
endif;

if( ! function_exists( 'double_box') ) :
function double_box( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'id' => 'slideshow',
		'controls' => 'true'
    ), $atts));
	return '<li><div class="double-box" >' . do_shortcode($content) . '</div></li>';
	
}
add_shortcode( 'double_box', 'double_box' );
endif;

if( ! function_exists( 'project_box') ) :
function project_box( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'image' => '',
		'title1' => '',
		'text1' => '',
		'btn_link' => '',
		'btn_text' => '',
		'title2' => '',
		'text2' => '',
		'text3' => '',
		'value' => '',
		'' => ''
    ), $atts));
	return '<div class="project-box">
											
				<!-- project photo side -->
				<div class="project-photo">
					<div class="project-photo-w">
						<div class="project-photo-complex">						
						<img class="" src="'.$image.'" alt="" />
						</div>
					</div>
					<div class="project-photo-t-w">
						<div class="project-photo-t">
							<h4>'.$title1.'</h4>
							<p>'.$text1.'</p>
							<span class="btn-orange-w"><a href="'.$btn_link.'" class="btn btn-orange">'.$btn_text.'</a>
							</span>
						</div>
					</div>
				</div>
				
				<!-- project item text -->
				<div class="project-info">
					<h3>'.$title2.'</h3>
					<div class="project-info-t">
					'.$text2.'
					</div>
					
					<!-- project bottom info -->
					<div class="project-info-f">
						'.$text3.'
						 
						<!-- project yellow bar -->
						<span class="gray-bar"><span class="yellow-bar" data-value="'.$value.'" ></span></span>
					</div>
				</div>
				<span class="clearfix"></span>
			</div>';
	
}
add_shortcode( 'project_box', 'project_box' );
endif;


if( ! function_exists( 'product_box' ) ):
function product_box( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'number' => '4',
		'rand' => '',
		'grid' => '3',
		'category' => '',
		'class'=>'',
		'fadeLikeDemo'=>''
	), $atts ) );
	///name: ProductBox
	///slug: product_box
	///category: Generosity
	///childs: testimonial_item
	///params: class,rand(checkbox),number
	///is_container: false
	///is_child: no
	///content: true
	if($rand == 'true'){
		$rand = 'rand';
	}
	
	ob_start(); 
	if(class_exists('Woocommerce')){
		echo '<div class="shop-container '.$class.'">';
		echo '<div class="woocommerce woocommerce-embed">';
	   $loop  = new WP_Query(esc_sql('orderby='.$rand.'&post_type='.'product'.'&order=DESC&ignore_sticky_posts=1&posts_per_page='.$number));
		$post = "";
		if($loop ->have_posts()):
		while($loop->have_posts()): $loop->the_post();
			?>

						<?php wc_get_template_part( 'content', 'product' ); ?>

		<?php 
		endwhile; // end of the loop.
		endif;
		echo "</div>";
		echo "</div>";
	}else{
	echo '<div class="text-center"><h5 style="">'.__('Install the woocommerce plugin, then create some products','generosity').'</h5></div>';
	}
    $ret = ob_get_contents();  
    ob_end_clean();  

	return $ret;
}
add_shortcode( 'product_box', 'product_box' );
endif;


if( ! function_exists( 'carousel_item') ) :
function carousel_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'active' => ''
    ), $atts));
	if($active=='true'){
	$active = 'active';
	}else{
	$active = '';
	}
	return '<div class="item '.$active.'">' . do_shortcode($content) . '</div>';
	
}
add_shortcode( 'carousel_item', 'carousel_item' );
endif;





if( ! function_exists( 'profile') ) :
function profile( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'image' => '',
		'info' => '',
		'name' => '',
		'role' => '',
    ), $atts));
	return '<div class="profile">
		<span class="profile-photo">
		<img src="'.$image.'" alt="" />
		</span>
		<span class="info">'.$info.'</span>
<h4>'.$name.'</h4>
<span>'.$role.'</span>'. do_shortcode( $content ).'</div>';
}
add_shortcode( 'profile', 'profile' );
endif;





if( ! function_exists( 'testimonials_box') ) :
function testimonials_box( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'background_color' => '#fff'
    ), $atts));
	return '<div class="testimonials-two center">
                <div class="slider-container animated out" data-animation="fadeInUp" data-delay="50" data-transition="1500">
                    <span class="quote-icon img-circle animated out" data-animation="fadeInDown" data-delay="500" data-transition="1500"></span>
					<div class="slider">' . do_shortcode($content) . '</div></div></div>';
}
add_shortcode( 'testimonials_box', 'testimonials_box' );
endif;





if( ! function_exists( 'testimonials_box_item') ) :
function testimonials_box_item( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'class' => '',
		'image' => '',
		'role' => '',
		'name' => ''
    ), $atts));
	return '<div class="slide">
                                	<div class="content">' . do_shortcode($content) . '</div>
                                    <div class="author-info center">
                                    	<p class="avatar"><img class="img-circle" src="'.$image.'" alt=""></p>
                                        <p class="info">
                                            <span class="author-name text-left">'.$name.'</span>
                                            <span class="author-post text-left">'.$role.'</span>
                                        </p>
                                    </div>
                                </div>';
}
add_shortcode( 'testimonials_box_item', 'testimonials_box_item' );
endif;









if( ! function_exists( 'social_iconss' ) ):
function social_iconss( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
	), $atts ) );
	$output = '<div class="social-icons '.$class.'">' .  do_shortcode( $content )  . '</div>';

	return $output;
}
add_shortcode( 'social_icons', 'social_iconss' );
endif;





if( ! function_exists( 'count_to' ) ):
function count_to( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'to'        => '0',
		'speed'        => '0',
	), $atts ) );
	$output = '<div class="fact-text">
	<span class="fact-number" data-to="'.$to.'" data-speed="'.$speed.'">'.$to.'</span><span class="fact-item">'. do_shortcode( $content ) .'</span>
	</div>';
	return $output;
}
add_shortcode( 'count_to', 'count_to' );
endif;


if( ! function_exists( 'testimonials' ) ):
function testimonials( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '',
	), $atts ) );
	
	
	if($animation!=''){
		$class .= ' animated out';
	}
	$output = ' <div class="testimonials-one '.$class.'" data-animation="'.$animation.'" data-transition="'.$transition.'">' .  do_shortcode( $content )  . '</div>';

	return $output;
}
add_shortcode( 'testimonials', 'testimonials' );
endif;



if( ! function_exists( 'testimonial_index' ) ):
function testimonial_index( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '',
		'delay'        => '',
	), $atts ) );
	if($animation!=''){
		$class .= ' animated out';
	}
	$output = ' <div class="testi-pager '.$class.'" data-animation="'.$animation.'" data-transition="'.$transition.'" data-delay="'.$delay.'">' .  do_shortcode( $content )  . '</div>';
	
	
	return $output;
}
add_shortcode( 'testimonial_index', 'testimonial_index' );
endif;


if( ! function_exists( 'carousel_slider' ) ):
function carousel_slider( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
	), $atts ) );
	///name: CarouselSlider
	///slug: carousel_slider
	///category: Generosity
	///childs: none
	///params: none
	///is_container: false	
	///settings: false	
	///is_child: no
	///content: true
	$output = '<div class="slider '.$class.'">' .  do_shortcode( $content )  . '</div>';

	return $output;
}
add_shortcode( 'carousel_slider', 'carousel_slider' );
endif;



if( ! function_exists( 'brand_carousel' ) ):
function brand_carousel( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'progress'        => '0',
		'class'        => '',
		
	), $atts ) );
	///name: BrandCarousel
	///slug: brand_carousel
	///category: Generosity
	///childs: none
	///params: none
	///is_container: almost	
	///settings: false	
	///is_child: no
	///content: true
	
	$the_content =   do_shortcode( $content );
	
	$the_content = str_replace( array( '<p>' ), '', $the_content );
	$the_content = str_replace( array( '</p>' ), '', $the_content );
	$the_content = str_replace( array( '<br />' ), '', $the_content );
	$the_content = preg_replace("[\n|\r|\n\r]", '', $the_content);
	$the_content= trim ($the_content);
	
	$output = '<div class="horizontal-carousel brand-carousel"><ul class="slides">'.$the_content.'</ul></div>';
	return $output;
}
add_shortcode( 'brand_carousel', 'brand_carousel' );
endif;



if( ! function_exists( 'brand' ) ):
function brand( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'img'        => '',
		'url'        => '#',
		'holder'        => '#',
	), $atts ) );
	///name: Brand
	///slug: brand
	///category: Generosity
	///childs: none
	///params: img,url,holder
	///is_container: false
	///is_child: no
	///content: true
	
	if($holder == 'div'){
		if($url!='#'){
		$output = '<div class="brand"><a href="'.$url.'"><img src="'.$img.'" alt="" /></a></div>';
		}else{
		$output = '<div class="brand"><img src="'.$img.'" alt="" /></div>';
		}
	}else{
		if($url!='#'){
		$output = '<li class="brand"><a href="'.$url.'"><img src="'.$img.'" alt="" /></a></li>';
		}else{
		$output = '<li class="brand"><img src="'.$img.'" alt="" /></li>';
		}
	}
	return $output;
}
add_shortcode( 'brand', 'brand' );
endif;


if( ! function_exists( 'accordion_box' ) ):
function accordion_box( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '',
	), $atts ) );
	///name: AccordionBox
	///slug: accordion_box
	///category: Generosity
	///childs: accordion_item
	///params: none
	///is_container: false
	///is_child: no
	///content: true
	
	if($animation!=''){
		$class .= ' animated out';
	}
	$output = ' <div class="accordion-box '.$class.'">' .  do_shortcode( $content )  . '</div>';

	return $output;
}
add_shortcode( 'accordion_box', 'accordion_box' );
endif;


if( ! function_exists( 'accordion_item' ) ):
function accordion_item( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '',
		'icon'        => '',
		'title'        => '',
		'active'        => '',
	), $atts ) );
	///name: AccordionItem
	///slug: accordion_item
	///category: Generosity
	///childs: none
	///params: active(checkbox),icon(iconpicker),title,content
	///is_container: false
	///is_child: no
	///content: false
	
	$collapsed = '';
	
	if($active=='active'||$active=='true'){
	$collapsed = 'collapsed';
	}
	
	
	$output = '<div class="accordion animated out">
							<div class="accord-btn '.$active.'"><strong><i class="fa '.$icon.'"></i>'.$title.'</strong></div>
							<div class="accord-content clearfix '.$collapsed.'">
							'.  do_shortcode( $content )  .'
							</div>
						</div>';

	return $output;
}
add_shortcode( 'accordion_item', 'accordion_item' );
endif;


if( ! function_exists( 'client' ) ):
function client( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'url'        => '#',
		'img'        => '',
		'animation'        => '',
		'transition'        => '1000',
		'delay'        => '',
		'target'        => '#',
	), $atts ) );
	
	if($animation!=''){
		$class .= ' animated out';
	}
	
	$output = '<div class="client text-left '.$class.'" data-animation="'.$animation.'" data-delay="'.$delay.'" data-transition="'.$transition.'"><a target="'.$target.'" href="'.$url.'"><img class="img-responsive" src="'.$img.'" alt=""></a></div>';

	return $output;
}
add_shortcode( 'client', 'client' );
endif;






if( ! function_exists( 'map_container' ) ):
function map_container( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'src'        => '',
		'transition'        => '',
	), $atts ) );
	///name: MapContainer
	///slug: map_container
	///category: Generosity
	///childs: contact_info
	///params: src
	///is_container: almost
	///is_child: no
	///content: false
	
	
	$output = '<div class="map-section">
				<div class="container">'.  do_shortcode( $content )  .'</div>
				
				<div class="iframe-w">
					<iframe class="'.$class.'" src="'.$src.'" width="800" height="600"  style="border:0"></iframe>
				</div>
				
				<span class="show-more-contact"><a href="#"><i class="fa fa-sort"></i></a></span>
				
			</div>';

	return $output;
}
add_shortcode( 'map_container', 'map_container' );
endif;

if( ! function_exists( 'contact_info' ) ):
function contact_info( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'image'        => '',
		'src'        => '',
		'transition'        => '',
	), $atts ) );
	///name: ContactInfo
	///slug: contact_info
	///category: Generosity
	///childs: none
	///params: image,content
	///is_container: false
	///is_child: no
	///parent: map_container
	///content: false

	
	$output = '<div class="contact-info-box animate fadeInLeft"><div class="contact-info-photo">
							<img src="'.$image.'" alt="" />
						</div><div class="contact-info-info">'.  do_shortcode( $content )  .'</div></div>';

	return $output;
}
add_shortcode( 'contact_info', 'contact_info' );
endif;


if( ! function_exists( 'background_slider' ) ):
function background_slider( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'image'        => '',
		'src'        => '',
		'transition'        => '',
	), $atts ) );
	

	
	$output = '<div id="background" style="">
		<div id="slider-pri">'.  do_shortcode( $content )  .'</div></div>';

	return $output;
}
add_shortcode( 'background_slider', 'background_slider' );
endif;


if( ! function_exists( 'simple_image_slider' ) ):
function simple_image_slider( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'image'        => '',
		'src'        => '',
		'transition'        => '',
	), $atts ) );
	

	
	$output = '<div class="simple-image-slider">'.  do_shortcode( $content )  .'</div>';

	return $output;
}
add_shortcode( 'simple_image_slider', 'simple_image_slider' );
endif;

if( ! function_exists( 'slider_main' ) ):
function slider_main( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'image'        => '',
		'src'        => '',
		'transition'        => '',
	), $atts ) );
	

	$the_content =   do_shortcode( $content );
	
	$the_content = str_replace( array( '<p>' ), '', $the_content );
	$the_content = str_replace( array( '</p>' ), '', $the_content );
	$the_content = str_replace( array( '<br />' ), '', $the_content );
	$the_content = preg_replace("[\n|\r|\n\r]", '', $the_content);
	$the_content= trim ($the_content);
	
	$output = '<div class="image-slider">
				<div class="slider-main"><ul class="slides">'. $the_content .'</ul></div></div>';

	return $output;
}
add_shortcode( 'slider_main', 'slider_main' );
endif;







if( ! function_exists( 'slider_text' ) ):
function slider_text( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'image'        => '',
		'src'        => '',
		'transition'        => '',
	), $atts ) );
	

	$the_content =   do_shortcode( $content );
	
	$the_content = str_replace( array( '<p>' ), '', $the_content );
	$the_content = str_replace( array( '</p>' ), '', $the_content );
	$the_content = str_replace( array( '<br />' ), '', $the_content );
	$the_content = preg_replace("[\n|\r|\n\r]", '', $the_content);
	$the_content= trim ($the_content);
	
	$output = '<div class="banner-shadow">
				<div class="container">
					<div class="text-slider-w"><div class="text-slider-y"><ul class="text-slider">'. $the_content .'</ul></div>
					<div class="controls controls-main">
							<div class="arrows-main">								
							</div>
						</div>
						</div></div></div>';

	return $output;
}
add_shortcode( 'slider_text', 'slider_text' );
endif;




if( ! function_exists( 'milestone_item' ) ):
function milestone_item( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '1000',
		'delay'        => '',
		'speed'        => '',
		'stop'        => '',
		'title'        => '',
		'icon'        => '',
	), $atts ) );
	
	if($animation!=''){
		$class .= ' animated out';
	}
	$plus='';
	if(strpos($stop,'+') !== false){
	$plus = '+';
	$stop = str_replace('+','',$stop);
	}
	$output = '<article class="'.$class.' milestone " data-animation="'.$animation.'" data-delay="'.$delay.'" data-transition="'.$transition.'"><div class="milestone-counter">
                            	<span class="icon customer"><i class="fa '.$icon.'"></i></span>
                                <h3><span class="stat-count highlight" data-speed="'.$speed.'" data-stop="'.$stop.'"></span>'.$plus.'</h3>
                                <div class="milestone-details"><h4>'.$title.'</h4></div>
                            </div>
                        </article>';
						
						

	return $output;
}
add_shortcode( 'milestone_item', 'milestone_item' );
endif;



if( ! function_exists( 'list_widget' ) ):
function list_widget( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '1000',
		'title'        => '',
		'title_link'        => '',
		'category'        => '',
		'tag'        => '',
		'latest'        => '',
		'number'        => '',
		'cat'        => '',
		'button_title'        => 'View All',
		'button_link'        => '',
		'target_links'        => '',
	), $atts ) );
	
	if($animation!=''){
		$class .= ' animated out';
	}
	
	
	if($content!=''){
	$output = '<article class="widget-list '.$class.'"  data-animation="'.$animation.'" data-transition="1500">
               <h4><a href="'.$title_link.'">'.$title.'</a></h4>'.  do_shortcode( $content )  .'<a target="'.$target_links.'" href="'.$button_link.'" class="btn view-all">'.$button_title.'</a></article>';
	}else{
		$rand = '';

		$args = array(
			'post_type' => '',
			'posts_per_page' => $number,
			'ignore_sticky_posts' => 1,
			'orderby' => $rand,
			'cat' => $cat
		);
		$portfolio = new WP_Query(esc_sql($args));
		$output = '<article class="widget-list '.$class.'"  data-animation="'.$animation.'" data-transition="'.$transition.'">
				   <h4><a target="'.$target_links.'" href="'.'">'.$title.'</a></h4>
				   <ul>';
		if($portfolio->have_posts()):
			while($portfolio->have_posts()): $portfolio->the_post(); 	
			
			$output .= '<li><a target="'.$target_links.'" href="'.get_the_permalink().'">'.get_the_title().'</a></li>';	
		
			endwhile;	
		endif;	
		$output .= '</ul><a target="'.$target_links.'" href="'.$button_link.'" class="btn view-all">'.$button_title.'</a>
				   </article>';
		
	}
	return $output;
}
add_shortcode( 'list_widget', 'list_widget' );
endif;






if( ! function_exists( 'serviceb' ) ):
function serviceb( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '1500',
		'icon'        => '',
	), $atts ) );
	
	if($animation!=''){
		$class .= ' animated out';
	}
	
	$output = '<div class="second-service-item">
				<img src="assets/images/01-service-icon.png" alt="">
				<h4>Increase Your Business</h4>
				<div class="line-dec"></div>
				<p>Flexitarian retro affogato listicle truffaut a gluten-free ready made organic.</p>
			</div>';

	return $output;
}
add_shortcode( 'serviceb', 'serviceb' );
endif;


if( ! function_exists( 'feature' ) ):
function feature( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
		'animation'        => '',
		'transition'        => '1500',
		'icon'        => '',
	), $atts ) );
	
	if($animation!=''){
		$class .= ' animated out';
	}
	
	$output = '<article class="service clearfix '.$class.'" data-animation="'.$animation.'" data-transition="'.$transition.'"><div class="icon"><i class="fa '.$icon.'"></i></div><div class="desc">'.  do_shortcode( $content )  .'</div></article>';

	return $output;
}
add_shortcode( 'feature', 'feature' );
endif;
















if( ! function_exists( 'e_icon') ) :
function e_icon( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'icon'       => '',
		'url'        => '',
		'size'       => '',
		'new_window' => 'no'
	), $atts ) );

	$new_window = ( $new_window == "no") ? '_self' : '_blank';

	$output = '';
	$attrs = '';

	if( ! empty($url) ){
		$a_attrs = ' href="'. esc_url($url) .'" target="'. esc_attr($new_window) .'"';
	}

	if( !empty($size) ) {
		$attrs .= ' style="font-size:'. esc_attr($size) .';line-height:'. esc_attr($size) .'"';
	}

	if( $url != '' ){
		$output .= '<a class="" '. $a_attrs .'><i class="fa fa-'. $icon .'" style="font-size: '. $size .'; line-height: '. $size .';"></i></a>';
	}else{
		$output .= '<i class="fa fa-'. $icon .'" '. $attrs .'></i>';
	}
	//$output = str_replace( array( '<p>' ), '', $output );
 //   $output = str_replace( array( '</p>' ), '', $output );
  //  $output = preg_replace("[\n|\r|\n\r]", '', $output);
  //$output= trim ($output);
	return $output;
}
add_shortcode( 'e_icon', 'e_icon' );
endif;




if( ! function_exists( 'list_container') ) :
function list_container( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'icon'       => '',
		'class'        => '',
		'size'       => '',
		'new_window' => 'no'
	), $atts ) );


	$output = '';
	$attrs = '';

	
		$output .= '<ul class="'.$class.'">'. do_shortcode( $content )  .'</ul>';
	
	$output = str_replace( array( '<p>' ), '', $output );
	$output = str_replace( array( '</p>' ), '', $output );
	$output = str_replace( array( '<br />' ), '', $output );
	$output = preg_replace("[\n|\r|\n\r]", '', $output);
	$output= trim ($output);
	
	
	return $output;
}
add_shortcode( 'list_container', 'list_container' );
endif;


if( ! function_exists( 'social_icons_container') ) :
function social_icons_container( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'icon'       => '',
		'class'        => '',
		'label'       => '',
		'new_window' => 'no'
	), $atts ) );


	$output = '';
	$label_span = '';

	if($label!=''){
		$label_span = '<span class="label-social">'.$label.'</span>';
	}
	
		$output .= $label_span.'<ul class="social-icons">'. do_shortcode( $content )  .'</ul>';
	
	$output = str_replace( array( '<p>' ), '', $output );
	$output = str_replace( array( '</p>' ), '', $output );
	$output = str_replace( array( '<br />' ), '', $output );
	$output = preg_replace("[\n|\r|\n\r]", '', $output);
	$output= trim ($output);
	
	
	return $output;
}
add_shortcode( 'social_icons_container', 'social_icons_container' );
endif;


if( ! function_exists( 'social_icon') ) :
function social_icon( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'icon'       => '',
		'class'        => '',
		'url'       => '#',
		'target'       => '',		
		'new_window' => 'no'
	), $atts ) );


	$output = '';
	$attrs = '';

	
		$output .= '<li class="'.$class.'"><a target="_blank" href="'.$url.'"><i class="fa fa-'.$icon.'"></i></a></li>';
	
	$output = str_replace( array( '<p>' ), '', $output );
	$output = str_replace( array( '</p>' ), '', $output );
	$output = str_replace( array( '<br />' ), '', $output );
	$output = preg_replace("[\n|\r|\n\r]", '', $output);
	$output= trim ($output);
	return $output;
}
add_shortcode( 'social_icon', 'social_icon' );
endif;



if( ! function_exists( 'item') ) :
function item( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'class'        => '',
	), $atts ) );


	$output = '';
	$attrs = '';

	
		$output .= '<li class='.$class.'>'. do_shortcode( $content )  .'</li>';
	
	$output = str_replace( array( '<p>' ), '', $output );
	$output = str_replace( array( '</p>' ), '', $output );
	$output = preg_replace("[\n|\r|\n\r]", '', $output);
	$output= trim ($output);
	return $output;
}
add_shortcode( 'item', 'item' );
endif;



function cleanp($content_raw){
$the_content =   do_shortcode( $content_raw );
	
	$the_content = str_replace( array( '<p>' ), '', $the_content );
	$the_content = str_replace( array( '</p>' ), '', $the_content );
	$the_content = str_replace( array( '<br />' ), '', $the_content );
	$the_content = preg_replace("[\n|\r|\n\r]", '', $the_content);
	$the_content= trim ($the_content);
	return $the_content;
}

function cleanpp($content_raw){
	return  preg_replace("/<p[^>]*>[\s|&nbsp;]*<\/p>/", '', $content_raw);
}