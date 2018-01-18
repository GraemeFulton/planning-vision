<?php if(!$is_compact) echo VAFPRESS_View::instance()->load('control/template_control_head', $head_info); ?>

<?php foreach ($items as $item): ?>
<label>
	<?php $checked = (in_array($item->value, $value)); ?>
	<input <?php if($checked) echo 'checked'; ?> class="vp-input<?php if($checked) echo " checked"; ?>" type="checkbox" name="<?php echo esc_attr($name); ?>" value="<?php echo esc_html($item->value); ?>" />
	<img src="<?php echo VAFPRESS_Util_Res::img($item->img); ?>" alt="<?php echo esc_attr($item->label); ?>" class="vp-js-tipsy image-item" style="<?php VAFPRESS_Util_Text::print_if_exists($item_max_width, 'max-width: %spx; '); ?><?php VAFPRESS_Util_Text::print_if_exists($item_max_height, 'max-height: %spx; '); ?>" original-title="<?php echo esc_attr($item->label); ?>" />
</label>
<?php endforeach; ?>

<?php if(!$is_compact) echo VAFPRESS_View::instance()->load('control/template_control_foot'); ?>