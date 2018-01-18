<?php 
$anchro_onepage = is_page_template('template-one-page.php');
$anchro_feedburner = esc_attr(anchro_option('feedburner'));

if(!empty($anchro_feedburner)){
	$anchro_feed_url = esc_url(anchro_option('feedburner'));
}else{
	$anchro_feed_url = esc_url(get_bloginfo('rss2_url'));
}


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- TITLE OF SITE -->
    <meta charset="<?php echo esc_html(get_bloginfo('charset')); ?>">
	
	<meta name="description" content="<?php echo esc_html(get_bloginfo('description'));?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php if(anchro_option('responsive_mode')): ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<?php endif; ?>
	
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>

<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">
	
				<?php get_template_part('nav1') ?>
				
				
				<?php if($anchro_onepage){
					get_template_part('content','slider');
				}?>
	
	