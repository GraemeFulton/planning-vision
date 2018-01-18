<?php
add_action('widgets_init', 'anchro_contact_widget');

function anchro_contact_widget()
{
	register_widget('anchro_Contact');
}

class anchro_Contact extends WP_Widget {
	
	function anchro_Contact()
	{
		$widget_ops = array('classname' => 'contact-info', 'description' => 'Contact widget.');

		$control_ops = array('id_base' => 'contact-widget');

	
		parent::__construct('contact-widget' , esc_html__('(theme)Contact Info','anchro'),$widget_ops,$control_ops);
	}
	
	function widget($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$info = esc_attr($instance['info']);
		$intitle1 = esc_attr($instance['intitle1']);
		$intitle2 = esc_attr($instance['intitle2']);
		$intitle3 = esc_attr($instance['intitle3']);
		$intitle4 = esc_attr($instance['intitle4']);
		$intitle5 = esc_attr($instance['intitle5']);
		$intitle6 = esc_attr($instance['intitle6']);
		$intitle7 = esc_attr($instance['intitle7']);
		$indetail1 = esc_attr($instance['indetail1']);
		$indetail2 = esc_attr($instance['indetail2']);
		$indetail3 = esc_attr($instance['indetail3']);
		$indetail4 = esc_attr($instance['indetail4']);
		$indetail5 = esc_attr($instance['indetail5']);
		$indetail6 = esc_attr($instance['indetail6']);
		$indetail7 = esc_attr($instance['indetail7']);
		

	echo wp_kses_post($before_widget);
		?>
		
		
		
		
		
		
		
		
		
		
		<?php if($title) {
				echo wp_kses_post($before_title) . $title . $after_title;
			}?>	
			
			<?php if($info) {
				echo '<p>'.wp_kses_post($info).'</p>';
			}?>	

			<ul class="contact-list">
				<?php if($intitle1): ?>
				<li><span><?php echo esc_html($intitle1) ?></span> <?php echo esc_html($indetail1) ?></li>
				<?php endif; ?>
				
				<?php if($intitle2): ?>
				<li><span><?php echo esc_html($intitle2) ?></span> <?php echo esc_html($indetail2) ?></li>
				<?php endif; ?>					
				
				<?php if($intitle3): ?>
				<li><span><?php echo esc_html($intitle3) ?></span> <?php echo esc_html($indetail3) ?></li>
				<?php endif; ?>
				
				<?php if($intitle4): ?>
				<li><span><?php echo esc_html($intitle4) ?></span> <?php echo esc_html($indetail4) ?></li>
				<?php endif; ?>
				
				<?php if($intitle5): ?>
				<li><span><?php echo esc_html($intitle5) ?></span> <?php echo esc_html($indetail5) ?></li>
				<?php endif; ?>
				
				<?php if($intitle6): ?>
				<li><span><?php echo esc_html($intitle6) ?></span> <?php echo esc_html($indetail6) ?></li>
				<?php endif; ?>
				
				<?php if($intitle7): ?>
				<li><span><?php echo esc_html($intitle7) ?></span> <?php echo esc_html($indetail7) ?></li>
				<?php endif; ?>
			</ul>
		
		
		
		
		
		
		
		
		
		
		
		
		
	
		
		

		

		<?php 
		echo wp_kses_post($after_widget);
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		$instance['info'] = $new_instance['info'];
		$instance['intitle1'] = $new_instance['intitle1'];
		$instance['intitle2'] = $new_instance['intitle2'];
		$instance['intitle3'] = $new_instance['intitle3'];
		$instance['intitle4'] = $new_instance['intitle4'];
		$instance['intitle5'] = $new_instance['intitle5'];
		$instance['intitle6'] = $new_instance['intitle6'];
		$instance['intitle7'] = $new_instance['intitle7'];
		
		$instance['indetail1'] = $new_instance['indetail1'];
		$instance['indetail2'] = $new_instance['indetail2'];
		$instance['indetail3'] = $new_instance['indetail3'];
		$instance['indetail4'] = $new_instance['indetail4'];
		$instance['indetail5'] = $new_instance['indetail5'];
		$instance['indetail6'] = $new_instance['indetail6'];
		$instance['indetail7'] = $new_instance['indetail7'];
		
		
		return $instance;
	}

	function form($instance)
	{
		$defaults = array(
			'title' => esc_html__('CONTACT INFO','anchro'),
			'info' => '',
			'intitle1' => esc_html__('title 1','anchro'),
			'intitle2' => esc_html__('title 2','anchro'),
			'intitle3' => esc_html__('title 3','anchro'),
			'intitle4' => esc_html__('title 4','anchro'),
			'intitle5' => '',
			'intitle6' => '',
			'intitle7' => '',
			'indetail1' => esc_html__('detail 1','anchro'),
			'indetail2' => esc_html__('detail 2','anchro'),
			'indetail3' => esc_html__('detail 3','anchro'),
			'indetail4' => esc_html__('detail 4','anchro'),
			'indetail5' => '',
			'indetail6' => '',
			'indetail7' => ''
			);
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		
		<p>

			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php echo esc_html__('Title:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('info')); ?>"><?php echo esc_html__('info:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('info')); ?>" name="<?php echo esc_attr($this->get_field_name('info')); ?>" value="<?php echo esc_html($instance['info']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle1')); ?>"><?php echo esc_html__('Contact title 1:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle1')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle1')); ?>" value="<?php echo esc_html($instance['intitle1']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail1')); ?>"><?php echo esc_html__('Contact detail 1:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail1')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail1')); ?>" value="<?php echo esc_html($instance['indetail1']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle2')); ?>"><?php echo esc_html__('Contact title 2:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle2')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle2')); ?>" value="<?php echo esc_html($instance['intitle2']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail2')); ?>"><?php echo esc_html__('Contact detail 2:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail2')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail2')); ?>" value="<?php echo esc_html($instance['indetail2']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle3')); ?>"><?php echo esc_html__('Contact title 3:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle3')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle3')); ?>" value="<?php echo esc_html($instance['intitle3']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail3')); ?>"><?php echo esc_html__('Contact detail 3:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail3')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail3')); ?>" value="<?php echo esc_html($instance['indetail3']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle4')); ?>"><?php echo esc_html__('Contact title 4:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle4')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle4')); ?>" value="<?php echo esc_html($instance['intitle4']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail4')); ?>"><?php echo esc_html__('Contact detail 4:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail4')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail4')); ?>" value="<?php echo esc_html($instance['indetail4']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle5')); ?>"><?php echo esc_html__('Contact title 5:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle5')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle5')); ?>" value="<?php echo esc_html($instance['intitle5']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail5')); ?>"><?php echo esc_html__('Contact detail 5:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail5')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail5')); ?>" value="<?php echo esc_html($instance['indetail5']); ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle6')); ?>"><?php echo esc_html__('Contact title 6:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle6')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle6')); ?>" value="<?php echo esc_html($instance['intitle6']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail6')); ?>"><?php echo esc_html__('Contact detail 6:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail6')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail6')); ?>" value="<?php echo esc_html($instance['indetail6']); ?>" />
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('intitle7')); ?>"><?php echo esc_html__('Contact title 7:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('intitle7')); ?>" name="<?php echo esc_attr($this->get_field_name('intitle7')); ?>" value="<?php echo esc_html($instance['intitle7']); ?>" />
		</p>
		
				<p>
			<label for="<?php echo esc_attr($this->get_field_id('indetail7')); ?>"><?php echo esc_html__('Contact detail 7:','anchro') ?></label>
			<input class="widefat" style="width: 150px;" id="<?php echo esc_attr($this->get_field_id('indetail7')); ?>" name="<?php echo esc_attr($this->get_field_name('indetail7')); ?>" value="<?php echo esc_html($instance['indetail7']); ?>" />
		</p>
		
		
		
	<?php
	}
}
?>