<?php if(!$is_compact) echo VAFPRESS_View::instance()->load('control/template_control_head', $head_info); ?>

<select multiple name="<?php echo esc_attr($name); ?>" class="vp-input vp-js-select2" autocomplete="off">
	<?php foreach ($items as $item): ?>
	<option <?php if(in_array($item->value, $value)) echo "selected" ?> value="<?php echo esc_html($item->value); ?>"><?php echo esc_html($item->label); ?></option>
	<?php endforeach; ?>
</select>

<?php if(!$is_compact) echo VAFPRESS_View::instance()->load('control/template_control_foot'); ?>