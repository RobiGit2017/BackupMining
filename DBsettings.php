<?php
class DatabaseSettings
{
	protected $settings;
	function getSettings()
	{
		
		// Database variables
		/*
		// Host name
		$settings['dbhost'] = 'localhost';
		// Database name
		$settings['dbname'] = 'gitalesp_BackUpMining';
		// Username
		$settings['dbusername'] = 'gitalesp_Test';
		// Password
		$settings['dbpassword'] = '[j9dUrk;SU_q';
		*/
		
		$settings['dbhost'] = '127.0.0.1';
		$settings['dbname'] = 'test';
		$settings['dbusername'] = 'user';
		$settings['dbpassword'] = '';
		
		return $settings;
	}
}
?>