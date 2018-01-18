<?php
add_action('widgets_init', 'anchro_about_us_widget');

function anchro_about_us_widget()
{
	register_widget('anchro_About_us');
}

class anchro_About_us extends WP_Widget {
	
	function anchro_About_us()
	{
		$widget_ops = array('classname' => 'about-us', 'description' => 'About us text + logo image.');

		$control_ops = array('id_base' => 'about_us-widget');

	
		parent::__construct('about_us-widget' , esc_html__('(theme)About us + image','anchro'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);		
		$logo_url = $instance['logo_url'];
		$text_about = ($instance['text_about']);
		
		
	echo wp_kses_post($before_widget);
		?>
		
		
		<?php if($logo_url==''){$logo_url = get_template_directory_uri() . '/assets/images/logo_black.png';} ?>
		
        <img class="logo-in-widget" src="<?php echo esc_url($logo_url) ?>" alt="">
       
       

		<div class="textwidget">
			<?php echo apply_filters( 'the_content', $text_about); ?>
			
		</div>
		
		
		
		

		

		<?php 
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['logo_url'] = $new_instance['logo_url'];
		$instance['text_about'] = $new_instance['text_about'];
		
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' =>  '', 'logo_url' => '', 'text_about' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','anchro') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('logo_url')); ?>"><?php esc_html_e('Logo url:','anchro') ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr($this->get_field_id('logo_url')); ?>" name="<?php echo esc_attr($this->get_field_name('logo_url')); ?>" value="<?php echo esc_attr($instance['logo_url']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('text_about')); ?>"><?php esc_html_e('Text About:','anchro') ?></label>
			<textarea name="<?php echo esc_attr($this->get_field_name('text_about')); ?>" id="<?php echo esc_attr($this->get_field_id('text_about')); ?>" cols="30" rows="10"><?php echo esc_textarea($instance['text_about']); ?></textarea>
		</p>
		
		
	<?php
	}
}
?>