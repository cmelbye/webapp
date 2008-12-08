<?php

class GameController extends WebApp_Controller {
	public function get() {
		WebApp_Template::render( 'game/form' );
	}
	
	public function post() {
		WebApp_Template::render( 'game/result' );
	}
}