<?php
add_action('widgets_init', 'anchro_popular_post_thumbnail_widget');

function anchro_popular_post_thumbnail_widget()
{
	register_widget('anchro_Popular_Post_Thumbnail');
}

class anchro_Popular_Post_Thumbnail extends WP_Widget {
	
	function anchro_Popular_Post_Thumbnail()
	{
		$widget_ops = array('classname' => 'popular_post-widget', 'description' => 'Displays post with thumbnail.');

		$control_ops = array('id_base' => 'popular_post-widget');

	
		parent::__construct('popular_post-widget' , esc_html__('(theme)Popular Post Thumbnail','anchro'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$number = $instance['number'];
		$orderby = $instance['orderby'];

		if(!$orderby) {
			$orderby = 'Highest Comments';
		}

	echo wp_kses_post($before_widget);
		?>
		

		<?php 
			if($title) {
				echo wp_kses_post($before_title) . $title . $after_title;
			}
		
			
			if($orderby == 'Highest Comments') {
				$order_string = '&orderby=comment_count';
			} else {
				$order_string = '&key=views&orderby=meta_value_num';
			}
			$popular_posts = new WP_Query(esc_sql( $order_string.'&order=DESC'.'&ignore_sticky_posts=1&posts_per_page='.$number));
			
			if($popular_posts->have_posts()):
			while($popular_posts->have_posts()): $popular_posts->the_post(); 
			if(has_post_thumbnail()):
			$item_content = substr(get_the_content(), 0,50);
			?>
			<div class="history-item">
					<?php the_post_thumbnail(array(100,100)) ?>
					<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<div class="line-dec"></div>
					<p><?php echo esc_html($item_content); ?>.</p>
				</div>	 
			<?php endif; ?>
			<?php endwhile; ?>			
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
			
		
		

		

		<?php 
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['orderby'] = $new_instance['orderby'];
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => esc_html__('Popular Posts','anchro'), 'number' => 3, 'orderby' => 'Highest Comments');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','anchro') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('orderby')); ?>"><?php esc_html_e('Popular Posts Order By:','anchro') ?></label> 
			<select id="<?php echo esc_attr($this->get_field_id('orderby')); ?>" name="<?php echo esc_attr($this->get_field_name('orderby')); ?>" class="widefat" style="width:100%;">
				<option <?php if ($instance['orderby'] == 'Highest Comments') echo 'selected="selected"'; ?>><?php esc_html_e('Highest Comments','anchro') ?></option>
				<option <?php if ($instance['orderby'] == 'Highest Views') echo 'selected="selected"'; ?>><?php esc_html_e('Highest Views','anchro') ?></option>
			</select>
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php esc_html_e('Number of items to show:','anchro') ?></label>
			<input class="widefat" style="width: 30px;" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
		</p>
		
		
	<?php
	}
}
?>