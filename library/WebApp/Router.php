<?php

class WebApp_Router {
	protected static $_instance = null;
	protected $_routes = null;
	
	public static function getInstance() {
		if( null === self::$_instance ) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}
	
	public function setRoutes( $routes ) {
		if( !is_array( $routes ) ) {
			return false;
		}
		
		$this->_routes = $routes;
		return true;
	}
	
	public function route() {
		$uri = $_SERVER['REQUEST_URI'];
		foreach( $this->_routes as $route => $controller ) {
			if( fnmatch( $route, $uri ) ) {
				return $controller;
			}
		}
		return false;
	}
}
