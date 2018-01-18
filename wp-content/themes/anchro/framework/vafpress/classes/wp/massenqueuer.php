<?php

/**
 * For singleton accessor, use VAFPRESS_WP_MassEnqueuer class instead.
 */
class VAFPRESS_WP_MassEnqueuer
{
	private static $_instance = null;

	public static function instance()
	{
		if(self::$_instance == null)
		{
			self::$_instance = new VAFPRESS_WP_Enqueuer();
		}
		return self::$_instance;
	}

}