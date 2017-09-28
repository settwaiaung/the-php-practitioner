<?php

$query = require 'core/bootstrap.php';

var_dump($app);


require Router::load('routes.php')
	
	->direct(Request::uri()); 
