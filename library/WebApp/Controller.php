<?php

class WebApp_Controller {
	public function __construct() {}
	
	public function execute() {
		switch( $_SERVER['REQUEST_METHOD'] ) {
			case 'GET':
				$this->get();
				break;
			case 'POST':
				$this->post();
				break;
			default:
				$this->get();
				break;
		}
	}
}