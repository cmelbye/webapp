<?php

define( 'APPLICATION_PATH', realpath( dirname( __FILE__ ) . '/' ) );

set_include_path(
	APPLICATION_PATH . '/library' .
	PATH_SEPARATOR . get_include_path()
);

require_once "WebApp/Loader.php";
WebApp_Loader::registerAutoload();

try {
	require 'bootstrap.php';
} catch( Exception $exception ) {
	echo '<html><body><center>'
		. 'An exception occured while bootstrapping the application.';
	if (defined('APPLICATION_ENVIRONMENT')
		&& APPLICATION_ENVIRONMENT != 'production'
	) {
		echo '<br /><br />' . $exception->getMessage() . '<br />'
			. '<div align="left">Stack Trace:' 
 			. '<pre>' . $exception->getTraceAsString() . '</pre></div>';
	}
	echo '</center></body></html>';
	exit(1);
}

WebApp_Controller_Front::dispatch();
