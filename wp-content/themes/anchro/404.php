<?php 
/*
 * Template Name: Page (Full Width)
 * Description: Create the famous One Page site with multiple sections and jump-to-section navigation
 */
 get_header();

		$anchro_style = '';
		if(anchro_option('bg_404')!= ''){
		$anchro_custom_bg = anchro_option('bg_404');		
		$anchro_style = 'background-image:url('.esc_url($anchro_custom_bg).')';
		}
 ?>
 <section class="heading-page" style="<?php echo esc_attr($anchro_style) ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="box-404">
					<h5 class="bigger"><?php echo esc_attr__('404','anchro'); ?></h5>
					<h1><?php echo esc_attr(anchro_option('404_text')); ?></h1>
					<div class="white-button"><a href="<?php echo home_url('/'); ?>" class="btn btn-prime btn-lg"><?php _e('BACK HOME','anchro') ?> <i class="fa fa-icon-left fa-home"></i></a></div>
					
				</div>
				
			</div>
		</div>
	</div>
</section>

  <!-- General Container -->
	</div>
	
		</div>
		<?php get_template_part('content','leftmenu') ?>
	</div>
<?php wp_footer(); ?>	
</body>
</html>