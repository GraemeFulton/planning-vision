<?php
require_once get_template_directory().'/framework/vafpress/bootstrap.php';
/**
 * Loading widgets
 */
include get_template_directory().('/widgets/recent-post.php');
include get_template_directory().('/widgets/popular-post.php');
include get_template_directory().('/widgets/gallery-slider.php');
include get_template_directory().('/widgets/gallery-sliderb.php');
include get_template_directory().'/widgets/about-us.php';
include get_template_directory().'/widgets/social-icons.php';
include get_template_directory().'/widgets/contact.php';

require_once(get_template_directory().('/include/wp_bootstrap_navwalker.php'));

include(get_template_directory().'/include/helper.php');



/**
 * Building Options
 */
function anchro_init_options(){
global $theme_options;
    $anchro_option_path  = get_template_directory() . '/framework/options/option.php';
    $theme_options = new VAFPRESS_Option(array(
        'is_dev_mode'           => false,
        'option_key'            => 'anchro_option',
        'page_slug'             => 'anchro_option',
        'template'              => $anchro_option_path,
        'menu_page'             => array(
									'position' => '100.4',
								),
        'use_auto_group_naming' => true,
        'use_exim_menu'         => false,
		'use_util_menu'         => true,
        'minimum_role'          => 'edit_theme_options',
        'layout'                => 'fixed',
        'page_title'            => esc_html__( 'Theme Options', 'anchro' ),
        'menu_label'            => esc_html__( 'Theme Options', 'anchro' ),
    ));
}
add_action( 'after_setup_theme', 'anchro_init_options' );

function anchro_option($key) {
	return vafpress_option('anchro_option' . '.' . $key);
}
if ( ! isset( $content_width ) ){
	$content_width = 600;
}

//directory of languages folder
load_theme_textdomain( 'anchro', get_template_directory() . '/languages' );



function anchro_pagination($paged_navi = '',$pages=''){
	$passtest = false;

	if($passtest){
	posts_nav_link();
	}
	$range = 2;
    $showitems = 3;

	global $paged;
    if ( get_query_var('paged') ) {
		$paged = get_query_var('paged');
	} else if ( get_query_var('page') ) {
		$paged = get_query_var('page');
	}else if ( $paged_navi!='' ) {
		$paged = $paged_navi;
	} else {
		$paged = 1;
	}

	if($paged<2) $range = 3;
	if($paged==2) $range = 3;
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}


	if(1 != $pages){
	echo '<div class="blog-pagination">';
	echo '<ul class="">';
	 if($paged > 2 && $paged > $range+1 && $showitems < $pages){
		echo "<li><a href='".esc_url(get_pagenum_link(1))."'><i class='fa fa-angle-double-left'></i></a></li> ";
	}

	 for ($i=1; $i <= $pages; $i++){
		 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
		 {
			 echo ($paged == $i)? "<li class='active'><a href='#'>".$i."</a></li> ":"<li><a href='".esc_url(get_pagenum_link($i))."' class='active' >".$i."</a></li> ";
		 }
	 }


	 if ($paged < $pages){
	 echo "<li><a href='".esc_url(get_pagenum_link($pages))."'><i class='fa fa-angle-double-right'></i></a></li> ";
	 }else{
	 echo "<li><a href='".esc_url(get_pagenum_link($pages))."'><i class='fa fa-angle-double-right'></i></a></li> ";
	 }
	 echo "</ul>\n";
	  echo '</div>';

	}
}




// Adding specific CSS class
add_filter('body_class','anchro_addinr_portfolio_class');
function anchro_addinr_portfolio_class($classes) {
	if ( isset( $post ) ) {
	$classes[] = get_post_format();
	}
	if(is_page_template('template-one-page.php')){

	}
	if(!anchro_option('search_top')){
	$classes[] = 'searchtopno';
	}
	if(anchro_option('disable_two_col')){
	$classes[] = 'disable_two_col';
	}
	return $classes;
}



function anchro_register_menus() {
	///DEVELOPER
	register_nav_menus(array(
		'main-menu' => 'Main Menu',
		'one-page-menu' => 'OnePage Menu',
	));
}
add_action('init', 'anchro_register_menus');









/*-----------------------------------------------------------------------------------*/
// Theme setup
/*-----------------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'anchro_theme_setup' );

function anchro_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('post-formats', array('link', 'gallery', 'quote', 'video', 'audio'));
	set_post_thumbnail_size( 50, 50, true );
}


add_action( 'add_meta_boxes', 'anchro_meta_box_add' );
function anchro_meta_box_add(){
  add_meta_box( 'anchro_meta-box-homepage', ' Template Options: ', 'anchro_meta_box_op', 'page', 'normal', 'high' );
	add_meta_box( 'anchro_meta-box-one-page', ' Template Options: ', 'anchro_meta_box_op', 'page', 'normal', 'high' );
	add_meta_box( 'anchro_meta-box-portfolio', ' Portfolio Options: ', 'anchro_meta_box_portfolio', 'portfolio', 'normal', 'high' );
	add_meta_box( 'anchro_meta-box-portfolio', ' Post Options: ', 'anchro_meta_box_post', 'post', 'normal', 'high' );
}
function anchro_meta_box_op( $post ){
	$values = get_post_custom( $post->ID );
	$desc_post = isset( $values['desc_post'] ) ? ( $values['desc_post'][0] ) : '';
	$custom_bg = isset( $values['custom_bg'] ) ? ( $values['custom_bg'][0] ) : '';
	$background_text = isset($values['background_text'])?($values['background_text'][0]):'';



    wp_nonce_field( 'anchro_my_meta_box_nonce', 'anchro_meta_box_nonce' );
	?>
	<div id="onepage_metabox">

		<h3><label for="background"><?php esc_html_e('Content in Main-Background:','anchro') ?> </label></h3>
		<?php
		wp_editor( $background_text, 'background_text' );
		?>
	</div>
	<div id="normalpage_metabox">

		<p>
			<h3><label for="desc_post"><?php esc_html_e('Description(below title)','anchro') ?>: </label></h3>
			<input  name="desc_post" id="desc_post" value="<?php echo esc_attr($desc_post) ?>"/>
		</p>
		<p>
			<h3><label for="custom_bg"><?php esc_html_e('Custom Header Background Img url','anchro') ?>: </label></h3>
			<input  name="custom_bg" id="custom_bg" value="<?php echo esc_attr($custom_bg) ?>"/>
		</p>
	</div>
    <?php
}



function anchro_meta_box_portfolio( $post ){
	$values = get_post_custom( $post->ID );
	$desc_post = isset( $values['desc_post'] ) ? ( $values['desc_post'][0] ) : '';
	$details = isset( $values['details'] ) ? ( $values['details'][0] ) : '';

    wp_nonce_field( 'anchro_my_meta_box_nonce', 'anchro_meta_box_nonce' );
	?>
	<div id="portfolio_metabox" class="anchro_metabox">
		<p>
			<h3><label for="desc_post"><?php esc_html_e('Description','anchro') ?>: </label></h3>
			<input  name="desc_post" id="desc_post" value="<?php echo esc_attr($desc_post) ?>"/>
		</p>





	</div>

    <?php
}


function anchro_meta_box_post( $post ){
	$values = get_post_custom( $post->ID );
	$subtitle_post = isset( $values['subtitle_post'] ) ? ( $values['subtitle_post'][0] ) : '';
	$desc_post = isset( $values['desc_post'] ) ? ( $values['desc_post'][0] ) : '';

    wp_nonce_field( 'anchro_my_meta_box_nonce', 'anchro_meta_box_nonce' );
	?>
	<div id="post_metabox">
		<p>
			<h3><label for="desc_post"><?php esc_html_e('Description Post(in banner)','anchro') ?>: </label></h3>
			<input  name="desc_post" id="desc_post" value="<?php echo esc_attr($desc_post) ?>"/>
		</p>
		<p>
			<h3><label for="subtitle_post"><?php esc_html_e('Subtitle Post(in post)','anchro') ?>: </label></h3>
			<input  name="subtitle_post" id="subtitle_post" value="<?php echo esc_attr($subtitle_post) ?>"/>
		</p>

	</div>

    <?php
}






add_action( 'save_post', 'anchro_meta_box_save' );
function anchro_meta_box_save( $post_id ){
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if( !isset( $_POST['anchro_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['anchro_meta_box_nonce'], 'anchro_my_meta_box_nonce' ) ) return;
    if(  ! current_user_can( 'edit_page', $post_id)) return;


	if( isset( $_POST['background_text'] ) )
        update_post_meta( $post_id, 'background_text', $_POST['background_text'] );


	if( isset( $_POST['details'] ) )
        update_post_meta( $post_id, 'details', $_POST['details'] );
	if( isset( $_POST['subtitle_post'] ) )
        update_post_meta( $post_id, 'subtitle_post', $_POST['subtitle_post'] );
	if( isset( $_POST['desc_post'] ) )
        update_post_meta( $post_id, 'desc_post', $_POST['desc_post'] );
	if( isset( $_POST['custom_bg'] ) )
        update_post_meta( $post_id, 'custom_bg', $_POST['custom_bg'] );

}


function anchro_admin_scripts($hook) {
	if($hook == 'post.php' || $hook == 'post-new.php') {
		wp_enqueue_script('custom-meta-js', get_template_directory_uri() . '/assets/js/meta.js', array('jquery'));
		wp_enqueue_style('custom_metacss', get_template_directory_uri() . '/assets/css/meta.css', false, '1.0.0' );
	}
}
add_action('admin_enqueue_scripts', 'anchro_admin_scripts');






function anchro_OpenSans_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'anchro' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Open Sans:400,300,600,700,800|Droid Serif:400,700' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}





/*-----------------------------------------------------------------------------------*/
/*	Theme customize
/*-----------------------------------------------------------------------------------*/
$anchro_argsa = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => get_template_directory_uri() . '/assets/images/heading-bg.jpg',
);
add_theme_support( 'custom-header', $anchro_argsa );



function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );






/*-----------------------------------------------------------------------------------*/
/*	Queue Scripts
/*-----------------------------------------------------------------------------------*/

function anchro_scripts() {

	//ENQUEUE CSS

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'jquery_ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
	wp_enqueue_style( 'simple_line_icons', get_template_directory_uri() . '/assets/css/simple-line-icons.css');
	wp_enqueue_style( 'font_awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'anchro', get_template_directory_uri() . '/assets/css/anchro.css');
	wp_enqueue_style( 'settings', get_template_directory_uri() . '/assets/rs-plugin/css/settings.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');


	wp_enqueue_style( 'anchro_fonts', anchro_OpenSans_fonts_url(), array(), '1.0.0' );


	$custom_css =  (anchro_option('custom_css'));

	if(anchro_option('bg_404')){
	$custom_css .= '.page-404{
    background:url('.anchro_option('bg_404').') no-repeat;
	}
	';
	}




    //some custom css


	if(anchro_option('general_bg')){
		$custom_css .= 'section.heading-page{
			background-image: url('.esc_url(anchro_option('general_bg')).');
		}';
	}

	if(anchro_option('general_bg_color')){
		$custom_css .= 'section.heading-page{
			background-color: '.esc_attr(anchro_option('general_bg_color')).';
		}';
	}


	if(anchro_option('banner_image')){
	$custom_css .= 'section.second-call-to-action{
	    background-image: url('.esc_url(anchro_option('banner_image')).');
	}';
	}
	if(anchro_option('logo_imga')){
	$custom_css .= '.site-header .main-header .logo{
	    background-image: url('.esc_url(anchro_option('logo_imga')).');
	}';
	}
	if(anchro_option('logo_imgb')){
	$custom_css .= '.scrolled-header .main-header .logo{
	    background-image: url('.esc_url(anchro_option('logo_imgb')).');
	}';
	}

	//wp_add_inline_style( 'style', $custom_css );
	//include  get_template_directory() . '/css/custom.css.php';
	//wp_add_inline_style( 'style', $custom_css2 );


	if(anchro_option('apply_custom_colors')){
		include   get_template_directory() . '/assets/css/color.css.php';
		wp_add_inline_style( 'style', $custom_color );

	}


	//ENQUEUE JAVSCRIPTS



	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '', true);

	if(is_page_template('template-one-page.php')){
	wp_enqueue_script('rs_plugin_js', get_template_directory_uri().'/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '', true);

	wp_enqueue_script('rs_plugin2_js', get_template_directory_uri().'/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '', true);
	}
	wp_enqueue_script('plugins_js', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), '', true);
	wp_enqueue_script('custom_js',get_template_directory_uri().'/assets/js/custom.js',array('plugins_js'), '', true);

	if(anchro_has_shortcode('google_map')){
	wp_enqueue_script('map_api', 'http://maps.google.com/maps/api/js?sensor=true', array(), '', true);
	wp_enqueue_script('google_mapb', get_template_directory_uri().'/assets/js/jquery.gmap3.min.js', array(), '', true);
	}

	//INSERT JAVSCRIPT VARS

	wp_localize_script( 'jquery', 'anchro_templateUrl', get_template_directory_uri() );
	wp_localize_script( 'jquery', 'anchro_ajaxurl', admin_url( 'admin-ajax.php' ) );

}
add_action( 'wp_enqueue_scripts', 'anchro_scripts' );


function anchro_has_shortcode($shortcode = '') {

    $post_to_check = get_post(get_the_ID());
     if(isset($post_to_check)){
    // false because we have to search through the post content first
    $found = false;

    // if no short code was provided, return false
    if (!$shortcode) {
        return $found;
    }

    // check the post content for the short code

		if ( stripos($post_to_check->post_content, '[' . $shortcode) !== false ) {
			// we have found the short code
			$found = true;
		}

		if ( stripos($post_to_check->post_content, '[' . 'vc_row') !== false ) {
			// we have found the short code
			$found = true;
		}



    // return our final results
    return $found;
	}
}





function anchro_add_image_sizes() {
	add_image_size('anchro_blog-post-thumbnail', 770, 380, true);
	add_image_size('anchro_blog-grid-post-thumbnail', 720, 545, true);//370, 280
	add_image_size('anchro_project-thumbnailb', 720, 500, true);//370, 280
	add_image_size('anchro_project-thumbnail', 370, 250, true);
	add_image_size('anchro_bembed-featured', 570, 320, true);
	add_image_size('anchro_bembed-thumbnail', 170, 150, true);
	add_image_size('anchro_featured_widget', 330, 220, true);
}
add_action('init', 'anchro_add_image_sizes');





function anchro_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	$ti_avatar = '';
	if(!get_avatar( $comment, 80 )){
	 $ti_avatar = 'is-no-coment';
	}

?>
<li class="first-comment">
	<?php
	$ti_avatar = "no-avatar";
	if(get_avatar( $comment, 80 )){
	echo get_avatar( $comment, 80 );
	$ti_avatar = "";
	}
	?>
	<div class="comment-comment <?php echo esc_attr($ti_avatar) ?>">
	<div class="reply">
		<?php comment_reply_link(array_merge( $args, array('reply_text'=>esc_html__('Reply','anchro'),'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
	</div>
	<h6><?php comment_author_link() ?></h6>
	<span><?php echo (get_comment_date())?> </span>
	<?php comment_text() ?>
	</div>
</li>











<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php
}

add_filter('get_avatar','anchro_change_avatar_css');

function anchro_change_avatar_css($class) {
$class = str_replace("class='avatar", "class='author_gravatar alignright_icon ", $class) ;
return $class;
}

/**
 * Sidebar widgets
 */
if(function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=>esc_attr__('Default sidebar','anchro'),
	'id'=>'sidebar-1',
	'before_widget'=>'<div class="sidebar-item connect-us %2$s" id="%1$s">',
	'after_widget'=>'</div>',
	'before_title'=>'<h4 class="widget_title">',
	'after_title'=>'</h4><div class="line-dec"></div>'
	));
}

if(function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=>esc_attr__('Left Hide sidebar','anchro'),
	'id'=>'sidebar-2',
	'before_widget'=>'<div class="responsive-menu %2$s" id="%1$s">',
	'after_widget'=>'</div>',
	'before_title'=>'<h4 class="widget_title">',
	'after_title'=>'</h4><div class="line-dec"></div>'
	));
}


if(function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=>esc_attr__('Footer 1','anchro'),
	'id'=>'footer-1',
	'before_widget'=>'<div class="widget our-history %2$s" id="%1$s">',
	'after_widget'=>'</div>',
	'before_title'=>'<h6>',
	'after_title'=>'</h6>'
	));
}

if(function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=>esc_attr__('Footer 2','anchro'),
	'id'=>'footer-2',
	'before_widget'=>'<div class="widget our-history %2$s" id="%1$s">',
	'after_widget'=>'</div>',
	'before_title'=>'<h6>',
	'after_title'=>'</h6>'
	));
}

if(function_exists('register_sidebar')){
	register_sidebar(array(
	'name'=>esc_attr__('Footer 3','anchro'),
	'id'=>'footer-3',
	'before_widget'=>'<div class="widget our-history %2$s" id="%1$s">',
	'after_widget'=>'</div>',
	'before_title'=>'<h6>',
	'after_title'=>'</h6>'
	));
}






add_action( 'after_setup_theme', 'anchro_requeriments' );
function anchro_requeriments() {
    add_theme_support( 'title-tag' );
}






add_filter('get_avatar','anchro_gravatar_class');

function anchro_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar thumb", $class);
    return $class;
}









function anchro_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'anchro_slug_setup' );













/* wrap for menu */
function anchro_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'

  // open the <ul>, set 'menu_class' and 'menu_id' values
  $wrap  = '<ul id="%1$s" class="%2$s">';

  // get nav items as configured in /wp-admin/
  $wrap .= '%3$s';


  if(anchro_option('search_top')){
  $wrap .= '<li>
				<p><a href="#" id="example-show" class="showLink" ><i class="fa fa-search"></i></a></p>
				<div id="example" class="more">
					<form method="get" id="blog-search" class="blog-search">
						<input type="text" class="blog-search-field" name="s" placeholder="'.esc_attr(anchro_option('search_top_label')).'" value="">
					</form>
					<p><a href="#" id="example-hide" class="hideLink"
					><i class="
					fa fa-close"></i></a></p>
				</div>
			</li>';
	}

  // close the <ul>
  $wrap .= '</ul>';

  // return the result
  return $wrap;
}






/**
 * TGM-Plugin-Activation
 */
require_once get_template_directory() . '/include/class-tgm-plugin-activation.php';

function anchro_plugin_activation() {

	$plugins = array(
		array(
			'name'     => esc_html__('ShortcodesDex', 'anchro'),
			'slug'     => 'shortcodesdex',
			'source'   				=> get_template_directory() . '/include/libs/shortcodesdex.zip',
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),	array(
			'name'     => esc_html__('Contact Form 7', 'anchro'),
			'slug'     => 'contact-form-7',
			'required' => false,
		),	array(
			'name'     => esc_html__('mailchimp-for-wp', 'anchro'),
			'slug'     => 'mailchimp-for-wp',
			'required' => false,
		),array(
            'name'               => esc_html__('Visual composer', 'anchro'),
            'slug'               => 'js_composer',
            'source'             => get_template_directory() . '/include/libs/js_composer.zip',
            'required'           => true,
        ),
	);


	$config = array(
        'domain'            => 'anchro',           // Text domain - likely want to be the same as your theme.
    );

	tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'anchro_plugin_activation');
