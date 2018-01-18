<?php
add_action('widgets_init', 'g_twitter_feed_widgets');

function g_twitter_feed_widgets()
{
	register_widget('g_twitter_feed');
}

class g_twitter_feed extends WP_Widget {
	
	function g_twitter_feed()
	{
		$widget_ops = array('classname' => 'widget-tweets', 'description' => 'Slideshow of twitter feed.');

		$control_ops = array('id_base' => 'twitter_feed-widget');

		parent::__construct('twitter_feed-widget' , __('(theme)Twitter Feed Slider','generosity'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$number = esc_attr($instance['number']);
		$username = esc_attr($instance['username']);
		echo wp_kses_post($before_widget);
		if($args['id']=='footer-1'||$args['id']=='footer-2'||$args['id']=='footer-3'||$args['id']=='footer-4'):
						
			if($title) {
				echo wp_kses_post($before_title) . $title . $after_title;
			}
			
			?>
		
			<!-- tweet Slider -->
			<div class="tweets-slider" data-username="<?php echo esc_attr($username) ?>" data-count="<?php echo esc_attr($number) ?>">
								
							

		</div>

		
		
		<?php else:
							
			if($title) {
				echo wp_kses_post($before_title) . $title . $after_title;
			}
			
			?>
			<span class="float-username"><a href="https://twitter.com/<?php echo esc_attr($username) ?>">@<?php echo esc_attr($username) ?></a> <i class="fa fa-twitter"></i></span>
			
			<!-- tweet Slider -->
			<div class="tweet feeds" data-username="<?php echo esc_attr($username) ?>" data-count="<?php echo esc_attr($number) ?>"></div>
		
		
		
		
		<?php 
		endif;
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = $new_instance['number'];
		$instance['username'] = $new_instance['username'];
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => 'Latest Tweet', 'number' => 3, 'username' => 'username');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Title:','generosity') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
<p>
			<label for="<?php echo esc_attr($this->get_field_id('username')); ?>"><?php _e('Username:','generosity') ?></label>
			<input class="widefat" style="width: 180px;" id="<?php echo esc_attr($this->get_field_id('username')); ?>" name="<?php echo esc_attr($this->get_field_name('username')); ?>" value="<?php echo esc_attr($instance['username']); ?>" />
		</p>	
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php _e('Number of tweets to show:','generosity') ?></label>
			<input class="widefat" style="width: 30px;" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
		</p>
			
	<?php
	}
}
?>