<?php

/*
|--------------------------------------------------------------------------
| Vafpress Framework Constants
|--------------------------------------------------------------------------
*/

defined('VAFPRESS_VERSION')     or define('VAFPRESS_VERSION'    , '2.0-beta');
defined('VAFPRESS_NAMESPACE')   or define('VAFPRESS_NAMESPACE'  , 'VAFPRESS_');
defined('VAFPRESS_DIR')         or define('VAFPRESS_DIR'        , untrailingslashit(get_template_directory().'/framework/vafpress'));
defined('VAFPRESS_DIR_NAME')    or define('VAFPRESS_DIR_NAME'   , basename(VAFPRESS_DIR));
defined('VAFPRESS_IMAGE_DIR')   or define('VAFPRESS_IMAGE_DIR'  , VAFPRESS_DIR . '/public/img');
defined('VAFPRESS_CONFIG_DIR')  or define('VAFPRESS_CONFIG_DIR' , VAFPRESS_DIR . '/config');
defined('VAFPRESS_DATA_DIR')    or define('VAFPRESS_DATA_DIR'   , VAFPRESS_DIR . '/data');
defined('VAFPRESS_CLASSES_DIR') or define('VAFPRESS_CLASSES_DIR', VAFPRESS_DIR . '/classes');
defined('VAFPRESS_VIEWS_DIR')   or define('VAFPRESS_VIEWS_DIR'  , VAFPRESS_DIR . '/views');
defined('VAFPRESS_INCLUDE_DIR') or define('VAFPRESS_INCLUDE_DIR', VAFPRESS_DIR . '/includes');

// get and normalize framework dirname
$dirname        = str_replace('\\' ,'/', get_template_directory().'/framework/vafpress'); // standardize slash
$dirname        = preg_replace('|/+|', '/', $dirname);       // normalize duplicate slash
// get and normalize WP content directory
$wp_content_dir = str_replace( '\\', '/', WP_CONTENT_DIR );  // standardize slash

// build relative url
$relative_url   = str_replace($wp_content_dir, "", $dirname);

// finally framework base url
$vafpress_url         = content_url() . $relative_url;

defined('VAFPRESS_URL')         or define('VAFPRESS_URL'        , untrailingslashit($vafpress_url));
defined('VAFPRESS_PUBLIC_URL')  or define('VAFPRESS_PUBLIC_URL' , VAFPRESS_URL        . '/public');
defined('VAFPRESS_IMAGE_URL')   or define('VAFPRESS_IMAGE_URL'  , VAFPRESS_PUBLIC_URL . '/img');
defined('VAFPRESS_INCLUDE_URL') or define('VAFPRESS_INCLUDE_URL', VAFPRESS_URL        . '/includes');

// Get the start time and memory usage for profiling
defined('VAFPRESS_START_TIME')  or define('VAFPRESS_START_TIME', microtime(true));
defined('VAFPRESS_START_MEM')   or define('VAFPRESS_START_MEM',  memory_get_usage());

/**
 * EOF
 */