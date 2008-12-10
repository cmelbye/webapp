<?php

class GameController extends WebApp_Controller {
	protected $step = 1;
	
	public function execute() {
		$this->execute();
		
		if( $this->method == 'POST' )
			WebApp_Template::render( 'game/result' );
		
		WebApp_Template::render( 'game/form' );
	}
	
	public function get() {}
	public function post() {}
}