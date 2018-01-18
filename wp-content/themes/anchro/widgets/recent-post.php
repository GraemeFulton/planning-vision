<?php
add_action('widgets_init', 'anchro_recent_post_thumbnail_widget');

function anchro_recent_post_thumbnail_widget()
{
	register_widget('anchro_Recent_Post_Thumbnail');
}

class anchro_Recent_Post_Thumbnail extends WP_Widget {
	
	function anchro_Recent_Post_Thumbnail()
	{
		$widget_ops = array('classname' => 'our-history', 'description' => 'Displays post with thumbnail.');

		$control_ops = array('id_base' => 'recent_post-widget');


		parent::__construct('recent_post-widget' , esc_html__('(theme)Recent Post Thumbnail','anchro'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$number = esc_attr($instance['number']);
		$random = isset($instance['random']) ? 'true' : 'false';

echo wp_kses_post($before_widget);
		?>
		

		<?php 
			if($title) {
				echo wp_kses_post($before_title) . $title . $after_title;
			}
		
			$rand = '';
			if($random == 'true'){
				$rand = 'rand';
			}
			$args = array(
				'post_type' => '',
				'posts_per_page' => $number,
				'ignore_sticky_posts' => 1,
				'orderby' => $rand
			);			
			$portfolio = new WP_Query(esc_sql($args));
			
			if($portfolio->have_posts()):
			while($portfolio->have_posts()): $portfolio->the_post(); 
			if(has_post_thumbnail()):
			$item_content = substr(get_the_content(), 0,50);
			?>
			
				<div class="history-item">
					<?php the_post_thumbnail(array(100,100)) ?>
					<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<div class="line-dec"></div>
					<p><?php echo esc_html($item_content); ?>.</p>
				</div>	 
				
			

                    

				
		
		
		<?php endif;?>	
		<?php endwhile; ?>	
		<?php endif;?>		

			
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
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Recent Post', 'number' => 3, 'random' => 'off');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','anchro') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
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