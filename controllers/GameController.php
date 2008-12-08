<?php

class GameController extends WebApp_Controller {
	$step = 1;
	
	public function __construct() {
		$this->step = substr( $_SERVER['REQUEST_URI'], 1 );
	}
	
	public function get() {
		echo $this->step;
		WebApp_Template::render( 'game/form' );
	}
	
	public function post() {
		echo $this->step;
		WebApp_Template::render( 'game/result' );
	}
}