<?php
add_action('widgets_init', 'anchro_social_icons_widget');

function anchro_social_icons_widget()
{
	register_widget('anchro_Social_Icons');
}

class anchro_Social_Icons extends WP_Widget {
	
	function anchro_Social_Icons()
	{
		$widget_ops = array('classname' => 'anchro_Social_Icons', 'description' => 'Displays post with thumbnail.');

		$control_ops = array('id_base' => 'social_icons-widget');

	
		parent::__construct('social_icons-widget' , esc_html__('(theme)Social Icons','anchro'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$twitter = esc_attr($instance['twitter']);
		$facebook = esc_attr($instance['facebook']);
		$flickr = esc_attr($instance['flickr']);
		$linkedin = esc_attr($instance['linkedin']);
		$google_plus = esc_attr($instance['google_plus']);
		$vimeo = esc_attr($instance['vimeo']);
		$pinterest = esc_attr($instance['pinterest']);
		$tumblr = esc_attr($instance['tumblr']);
		$youtube = esc_attr($instance['youtube']);
		$mail = esc_attr($instance['mail']);
		$vk = esc_attr($instance['vk']);
		$behance = esc_attr($instance['behance']);
		$instagram = esc_attr($instance['instagram']);
		$dribbble = esc_attr($instance['dribbble']);

		echo wp_kses_post($before_widget);
		?>
		
		
			<?php if($title) {
				echo wp_kses_post($before_title) . $title . $after_title;
			}?>	
						
			<ul class="social-icons">
		
						
				<?php if($facebook): ?>
				<li><a href="<?php echo esc_url($facebook) ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				
				<?php if($twitter): ?>
				<li><a href="<?php echo esc_url($twitter) ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				
				<?php if($flickr): ?>
				<li><a href="<?php echo esc_url($flickr) ?>"><i class="fa fa-flickr"></i></a></li>
				<?php endif; ?>
				
				<?php if($vimeo): ?>
				<li><a href="<?php echo esc_url($vimeo) ?>"><i class="fa fa-vimeo-square"></i></a></li>
				<?php endif; ?>
				
				<?php if($google_plus): ?>
				<li><a href="<?php echo esc_url($google_plus) ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
					
				<?php if($linkedin): ?>
				<li><a href="<?php echo esc_url($linkedin) ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				
				<?php if($dribbble): ?>
				<li><a href="<?php echo esc_url($dribbble) ?>"><i class="fa fa-dribbble"></i></a></li>
				<?php endif; ?>
				
				<?php if($pinterest): ?>
				<li><a href="<?php echo esc_url($pinterest) ?>"><i class="fa fa-pinterest"></i></a></li>
				<?php endif; ?>			
				
				<?php if($mail): ?>
				<li><a href="<?php echo esc_url($mail) ?>"><i class="fa fa-envelope-o"></i></a></li>
				<?php endif; ?>	
				
				<?php if($tumblr): ?>
				<li><a href="<?php echo esc_url($tumblr) ?>"><i class="fa fa-tumblr"></i></a></li>
				<?php endif; ?>	
				
				<?php if($youtube): ?>
				<li><a href="<?php echo esc_url($youtube) ?>"><i class="fa fa-youtube"></i></a></li>
				<?php endif; ?>	
				
				<?php if($vk): ?>
				<li><a href="<?php echo esc_url($vk) ?>"><i class="fa fa-vk"></i></a></li>
				<?php endif; ?>	
				
				<?php if($behance): ?>
				<li><a href="<?php echo esc_url($behance) ?>"><i class="fa fa-behance"></i></a></li>
				<?php endif; ?>	
				
				<?php if($instagram): ?>
				<li><a href="<?php echo esc_url($instagram) ?>"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>	
				
				
				
						
		</ul>
		
		

		

		<?php 
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['twitter'] = $new_instance['twitter'];
		$instance['flickr'] = $new_instance['flickr'];
		$instance['facebook'] = $new_instance['facebook'];
		$instance['tumblr'] = $new_instance['tumblr'];
		$instance['youtube'] = $new_instance['youtube'];
		$instance['linkedin'] = $new_instance['linkedin'];
		$instance['mail'] = $new_instance['mail'];
		$instance['google_plus'] = $new_instance['google_plus'];
		$instance['pinterest'] = $new_instance['pinterest'];
		$instance['vimeo'] = $new_instance['vimeo'];
		$instance['vk'] = $new_instance['vk'];
		$instance['behance'] = $new_instance['behance'];
		$instance['instagram'] = $new_instance['instagram'];
		$instance['dribbble'] = $new_instance['dribbble'];
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array('title' => esc_html__('CONNECT WITH US','anchro'), 'twitter' => '', 'flickr' => '','flickr' => '','facebook' => '','tumblr' => '','youtube' => '','linkedin' => '','mail' => '','google_plus' => '','pinterest' => '','vimeo' => '','vk' => '','behance' => '','instagram' => '','dribbble' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>

			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php echo esc_html__('Twitter link:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" value="<?php echo esc_url($instance['twitter']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php echo esc_html__('Facebook link:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" value="<?php echo esc_url($instance['facebook']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php echo esc_html__('Linkedin link:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" value="<?php echo esc_url($instance['linkedin']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('dribbble')); ?>"><?php echo esc_html__('Dribbble link:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('dribbble')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbble')); ?>" value="<?php echo esc_url($instance['dribbble']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('flickr')); ?>"><?php echo esc_html__('flickr:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('flickr')); ?>" name="<?php echo esc_attr($this->get_field_name('flickr')); ?>" value="<?php echo esc_url($instance['flickr']); ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php echo esc_html__('Tumblr:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" value="<?php echo esc_url($instance['tumblr']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php echo esc_html__('Youtube:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" value="<?php echo esc_url($instance['youtube']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('google_plus')); ?>"><?php echo esc_html__('Google Plus link:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('google_plus')); ?>" name="<?php echo esc_attr($this->get_field_name('google_plus')); ?>" value="<?php echo esc_url($instance['google_plus']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('mail')); ?>"><?php echo esc_html__('mail:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('mail')); ?>" name="<?php echo esc_attr($this->get_field_name('mail')); ?>" value="<?php echo esc_url($instance['mail']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php echo esc_html__('Pinterest link:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" value="<?php echo esc_url($instance['pinterest']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('vimeo')); ?>"><?php echo esc_html__('Vimeo:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('vimeo')); ?>" name="<?php echo esc_attr($this->get_field_name('vimeo')); ?>" value="<?php echo esc_url($instance['vimeo']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('vk')); ?>"><?php echo esc_html__('vk:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('vk')); ?>" name="<?php echo esc_attr($this->get_field_name('vk')); ?>" value="<?php echo esc_url($instance['vk']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('behance')); ?>"><?php echo esc_html__('behance:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('behance')); ?>" name="<?php echo esc_attr($this->get_field_name('behance')); ?>" value="<?php echo esc_url($instance['behance']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php echo esc_html__('instagram:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" value="<?php echo esc_url($instance['instagram']); ?>" />
		</p>
		
		
	<?php
	}
}
?>