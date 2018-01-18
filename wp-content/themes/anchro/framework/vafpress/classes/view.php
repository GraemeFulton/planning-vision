<?php

/**
 * A Singleton class for loading view template
 */
class VAFPRESS_View
{

	/**
	 * Singleton instance of the class
	 * @var Option_View
	 */
	private static $_instance;

	private $_views;

	private function __construct()
	{
		$this->_views    = array();
	}

	public static function instance()
	{
		if (is_null(self::$_instance))
		{
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * Load view file
	 * @param  String $field_view_file Name of the view file
	 * @param  Array $data Array of data to be binded on the view
	 * @return String The result view
	 */
	public function load($field_view_file, $data = array())
	{
		if (array_key_exists('field_view_file', $data))
		{
			throw new Exception("Sorry 'field_view_file' variable name can't be used.");
		}

		$view_file = get_template_directory().'/framework/vafpress/views/'.$field_view_file.'.php';
		
		if($view_file === false)
		{
			throw new Exception("View file not found.");
		}
	
		extract($data);
		ob_start();
		include $view_file;//This var uses get_template_directory
		return ob_get_clean();
	}

}

/**
 * EOF
 */