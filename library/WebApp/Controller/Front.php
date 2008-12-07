<?php

class WebApp_Controller_Front {
	public static function dispatch() {
		$controller_name = WebApp_Router::getInstance()->route();
		
		if( !$controller_name ) {
			require_once 'WebApp/Exception.php';
			throw new WebApp_Exception( '404 Error!' );
		}
		
		$controller = self::getController( $controller_name );
		$controller->execute();
	}
	
	protected function getController( $controller_name ) {
		$controller_name = preg_replace('/[^a-zA-Z0-9]/', '', $controller_name);
		$controller_file = "controllers/" . $controller_name . '.php';
		
		if( file_exists( $controller_file ) ) {
			require_once $controller_file;
			
			if( class_exists( $controller_name ) ) {
				return new $controller_name;
			}
		} else {
			require_once 'WebApp/Exception.php';
			throw new WebApp_Exception( '404 Error!' );
		}
	}
}
