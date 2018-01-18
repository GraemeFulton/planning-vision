<?php

return array(

	////////////////////////////////////////
	// Localized JS Message Configuration //
	////////////////////////////////////////

	/**
	 * Validation Messages
	 */
	'validation' => array(
		'alphabet'     => esc_html__('Value needs to be Alphabet', 'anchro'),
		'alphanumeric' => esc_html__('Value needs to be Alphanumeric', 'anchro'),
		'numeric'      => esc_html__('Value needs to be Numeric', 'anchro'),
		'email'        => esc_html__('Value needs to be Valid Email', 'anchro'),
		'url'          => esc_html__('Value needs to be Valid URL', 'anchro'),
		'maxlength'    => esc_html__('Length needs to be less than {0} characters', 'anchro'),
		'minlength'    => esc_html__('Length needs to be more than {0} characters', 'anchro'),
		'maxselected'  => esc_html__('Select no more than {0} items', 'anchro'),
		'minselected'  => esc_html__('Select at least {0} items', 'anchro'),
		'required'     => esc_html__('This is required', 'anchro'),
	),

	/**
	 * Import / Export Messages
	 */
	'util' => array(
		'import_success'    => esc_html__('Import succeed, option page will be refreshed..', 'anchro'),
		'import_failed'     => esc_html__('Import failed', 'anchro'),
		'export_success'    => esc_html__('Export succeed, copy the JSON formatted options', 'anchro'),
		'export_failed'     => esc_html__('Export failed', 'anchro'),
		'restore_success'   => esc_html__('Restoration succeed, option page will be refreshed..', 'anchro'),
		'restore_nochanges' => esc_html__('Options identical to default', 'anchro'),
		'restore_failed'    => esc_html__('Restoration failed', 'anchro'),
	),

	/**
	 * Control Fields String
	 */
	'control' => array(
		// select2 select box
		'select2_placeholder' => esc_html__('Select option(s)', 'anchro'),
		// fontawesome chooser
		'fac_placeholder'     => esc_html__('Select an Icon', 'anchro'),
	),

);

/**
 * EOF
 */