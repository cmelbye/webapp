<?php

class WebApp_Controller {
	protected $method;
	
	public function __construct() {
		$this->method = $_SERVER['REQUEST_METHOD'];
	}
	
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