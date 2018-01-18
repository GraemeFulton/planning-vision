<?php if(!$is_compact) echo VAFPRESS_View::instance()->load('control/template_control_head', $head_info); ?>

<input class="vp-input" type="text" readonly id="<?php echo esc_attr($name); ?>" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_html($value); ?>" />
<div class="buttons">
	<input class="vp-js-upload vp-button button" type="button" value="<?php esc_html_e('Choose File', 'anchro'); ?>" />
	<input class="vp-js-remove-upload vp-button button" type="button" value="x" />
</div>
<div class="image">
	<img src="<?php echo wp_kses_post($preview); ?>" alt="" />
</div>

<?php if(!$is_compact) echo VAFPRESS_View::instance()->load('control/template_control_foot'); ?>