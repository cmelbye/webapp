<?php

// You may use shell wildcards in your route names
WebApp_Router::getInstance()->setRoutes( array(
	'/' => 'HomeController',
	'/step[12345]' => 'GameController',
));
