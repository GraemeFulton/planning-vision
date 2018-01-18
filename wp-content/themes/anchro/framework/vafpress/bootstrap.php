<?php

if( defined('VAFPRESS_VERSION') )
	return;

//////////////////////////
// Including Constants    //
//////////////////////////
require_once get_template_directory().'/framework/vafpress/constant.php';

//////////////////////////
// Including Autoloader   //
//////////////////////////
require_once get_template_directory().'/framework/vafpress/autoload.php';

//////////////////////////
// Load Languages       //
//////////////////////////
load_theme_textdomain('anchro', VAFPRESS_DIR . '/lang');

//////////////////////////
// Setup FileSystem     //
//////////////////////////
$vpfs = VAFPRESS_FileSystem::instance();
$vpfs->add_directories('views'   , VAFPRESS_VIEWS_DIR);
$vpfs->add_directories('config'  , VAFPRESS_CONFIG_DIR);
$vpfs->add_directories('data'    , VAFPRESS_DATA_DIR);
$vpfs->add_directories('includes', VAFPRESS_INCLUDE_DIR);

//////////////////////////
// Including Data Source  //
//////////////////////////
foreach (glob(VAFPRESS_DATA_DIR . "/*.php") as $datasource)
{
	get_template_part($datasource);//this var uses get_template_directory ()
}

//echo get_template_directory().'/framework/vafpress';
//////////////////////////
// TGMPA Unsetting      //
//////////////////////////
add_action('after_setup_theme', 'vafpress_tgm_ac_check');

if( !function_exists('vafpress_tgm_ac_check') )
{
	function vafpress_tgm_ac_check()
	{
		add_action('tgmpa_register', 'vafpress_tgm_ac_vafpress_check');	
	}
}

if( !function_exists('vafpress_tgm_ac_vafpress_check') )
{
	function vafpress_tgm_ac_vafpress_check()
	{
		if( defined('VAFPRESS_VERSION') and class_exists('TGM_Plugin_Activation') )
		{
			foreach (TGM_Plugin_Activation::$instance->plugins as $key => &$plugin)
			{
				if( $plugin['name'] === 'Vafpress Framework Plugin' )
				{
					unset(TGM_Plugin_Activation::$instance->plugins[$key]);
				}
			}
		}
	}
}

//////////////////////////
// Ajax Definition      //
//////////////////////////
add_action('wp_ajax_vafpress_ajax_wrapper', 'vafpress_ajax_wrapper');

if( !function_exists('vafpress_ajax_wrapper') )
{
	function vafpress_ajax_wrapper()
	{
		$function = $_POST['func'];
		$params   = $_POST['params'];

		if( VAFPRESS_Security::instance()->is_function_whitelisted($function) )
		{
			if(!is_array($params))
				$params = array($params);

			try {
				$result['data']    = call_user_func_array($function, $params);
				$result['status']  = true;
				$result['message'] = esc_html__("Successful", 'anchro');
			} catch (Exception $e) {
				$result['data']    = '';
				$result['status']  = false;
				$result['message'] = $e->getMessage();		
			}
		}
		else
		{
			$result['data']    = '';
			$result['status']  = false;
			$result['message'] = esc_html__("Unauthorized function", 'anchro');		
		}

		if (ob_get_length()) ob_clean();
		header('Content-type: application/json');
		echo json_encode($result);
		die();
	}
}

/////////////////////////////////
// Pool and Dependencies Init  //
/////////////////////////////////
add_action( 'admin_enqueue_scripts', 'vafpress_enqueue_scripts' );
add_filter( 'clean_url'            , 'vafpress_ace_script_attributes', 10, 1 );

if( !function_exists('vafpress_ace_script_attributes') )
{
	function vafpress_ace_script_attributes( $url )
	{
		if ( FALSE === strpos( $url, 'ace.js' ) )
			return $url;

		return "$url' charset='utf8";
	}
}





if( !function_exists('vafpress_enqueue_scripts') )
{
	function vafpress_enqueue_scripts()
	{
		$loader = VAFPRESS_WP_Loader::instance();
		$loader->build();
	}
}

/**
 * Easy way to get metabox values using dot notation
 * example:
 * 
 * vafpress_metabox('meta_name.field_name')
 * vafpress_metabox('meta_name.group_name')
 * vafpress_metabox('meta_name.group_name.0.field_name')
 * 
 */

if( !function_exists('vafpress_metabox') )
{
	function vafpress_metabox($key, $default = null, $post_id = null)
	{
		global $post;

		$vafpress_metaboxes = VAFPRESS_Metabox::get_pool();

		if(!is_null($post_id))
		{
			$the_post = get_post($post_id);
			if ( empty($the_post) ) $post_id = null;
		}
			
		if(is_null($post) and is_null($post_id))
			return $default;

		$keys = explode('.', $key);
		$temp = NULL;

		foreach ($keys as $idx => $key)
		{
			if($idx == 0)
			{
				if(array_key_exists($key, $vafpress_metaboxes))
				{
					$temp = $vafpress_metaboxes[$key];
					if(!is_null($post_id))
						$temp->the_meta($post_id);
					else
						$temp->the_meta();
				}
				else
				{
					return $default;
				}
			}
			else
			{
				if(is_object($temp) and get_class($temp) === 'VAFPRESS_Metabox')
				{
					$temp = $temp->get_the_value($key);
				}
				else
				{
					if(is_array($temp) and array_key_exists($key, $temp))
					{
						$temp = $temp[$key];
					}
					else
					{
						return $default;
					}
				}
			}
		}
		return $temp;
	}
}

/**
 * Easy way to get option values using dot notation
 * example:
 * 
 * vafpress_option('option_key.field_name')
 * 
 */

if( !function_exists('vafpress_option') )
{
	function vafpress_option($key, $default = null)
	{
		$vafpress_options = VAFPRESS_Option::get_pool();

		if(empty($vafpress_options))
			return $default;

		$keys = explode('.', $key);
		$temp = NULL;

		foreach ($keys as $idx => $key)
		{
			if($idx == 0)
			{
				if(array_key_exists($key, $vafpress_options))
				{
					$temp = $vafpress_options[$key];
					$temp = $temp->get_options();
				}
				else
				{
					return $default;
				}
			}
			else
			{
				if(is_array($temp) and array_key_exists($key, $temp))
				{
					$temp = $temp[$key];
				}
				else
				{
					return $default;
				}
			}
		}
		return $temp;
	}
}

/**
 * EOF
 */