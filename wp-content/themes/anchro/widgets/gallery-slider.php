<?php
add_action('widgets_init', 'anchro_slider_gallery_widget');

function anchro_slider_gallery_widget()
{
	register_widget('anchro_Slider_Gallery');
}

class anchro_Slider_Gallery extends WP_Widget {
	
	function anchro_Slider_Gallery()
	{
		$widget_ops = array('classname' => 'gslider-widget', 'description' => 'Displays a slider with portgolio items.');

		$control_ops = array('id_base' => 'gslider-widget');

	
		parent::__construct('gslider-widget' , esc_html__('(theme)Portfolio Slider','anchro'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$number = esc_attr($instance['number']);
		$label = esc_attr($instance['label']);
		$random = isset($instance['random']) ? 'true' : 'false';

		echo wp_kses_post($before_widget);
		?>
		
			<?php 
			if($title) {
			echo  wp_kses_normalize_entities($before_title ). $title . $after_title;
			}
			?>
			
			
								
								
								
			
			<!-- gallery Slider widget -->
			<div class="slider">
				<div class="single-slider">
					<ul class="slides">
					<?php
					$rand = '';
					
					$c_active = '';
					if($random == 'true'){
						$rand = 'rand';
					}
					$args = array(
						'post_type' => 'portfolio',
						'posts_per_page' => $number,
						'orderby' => $rand,
						'ignore_sticky_posts' => 1,
						'meta_key' => '_thumbnail_id'

					);
					$portfolio = new WP_Query($args);
					
					if($portfolio->have_posts()):
					while($portfolio->have_posts()): $portfolio->the_post(); 
					
					$url =  wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>

					<?php if(function_exists('has_post_thumbnail') && has_post_thumbnail(get_the_ID())) :
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'anchro_featured_widget' );	
						$the_thumb = '';
						if(isset($image[0])){
						$the_thumb = $image[0];
						}
					 ?>
					
					<li data-thumb="<?php echo esc_url($the_thumb) ?>">
						<div class="text-content">
							<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							<span><?php if($label!=''){echo esc_html($label).' / ';} ?>
						 <?php the_time(esc_html__('F j, Y','anchro')) ?> </span>
						</div>
						<?php the_post_thumbnail('anchro_featured_widget'); ?>
					</li>
						
						
					<?php endif;?>
					<?php endwhile; ?>
					<?php endif;?>
					
				</ul>
			</div><!-- gallery Slider widget end -->
		</div><!-- widget end -->

		
		<?php wp_reset_postdata(); ?>
		<?php 
		echo wp_kses_post($after_widget);
	}
	
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['random'] = $new_instance['random'];
		$instance['label'] = $new_instance['label'];
		
		return $instance;
	}

	function form($instance)
	{	$defaults = array('title' => 'Our Gallery', 'number' => 2, 'random' => 'on','label'=>'');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','anchro') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('label')); ?>"><?php esc_html_e('Label:','anchro') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('label')); ?>" name="<?php echo esc_attr($this->get_field_name('label')); ?>" value="<?php echo esc_attr($instance['label']); ?>" />
		</p>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of items to show:','anchro') ?></label>
			<input class="widefat" style="width: 30px;" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
		</p>
		
		<p>
			<input class="checkbox" type="checkbox" <?php checked($instance['random'], 'on'); ?> id="<?php echo esc_attr($this->get_field_id('random')); ?>" name="<?php echo esc_attr($this->get_field_name('random')); ?>" /> 
			<label for="<?php echo esc_attr($this->get_field_id('random')); ?>"><?php esc_html_e('Random Ordered','anchro') ?></label>
		</p>
	<?php
	}
}
?>