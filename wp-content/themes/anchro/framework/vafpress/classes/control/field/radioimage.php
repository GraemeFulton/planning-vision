<?php

class VAFPRESS_Control_Field_RadioImage extends VAFPRESS_Control_FieldMultiImage
{

	public function __construct()
	{
		parent::__construct();
		$this->add_container_extra_classes('vp-checked-field');
	}

	public static function withArray($arr = array(), $class_name = null)
	{
		if(is_null($class_name))
			$instance = new self();
		else
			$instance = new $class_name;
		$instance->_basic_make($arr);

		return $instance;
	}

	public function render($is_compact = false)
	{
		$this->_setup_data();
		$this->add_data('is_compact', $is_compact);
		return VAFPRESS_View::instance()->load('control/radioimage', $this->get_data());
	}

}

/**
 * EOF
 */