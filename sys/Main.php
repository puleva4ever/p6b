<?php

require ('sys/Request.php');

class Main{

	static function init(){
		// recuperar la request
		echo $_SERVER['REQUEST_URI'];
		// extract all the components un URI
		Request::retrieve();
		$controller=Request::getCont();
		Coder::code($controller);
		$action=Request::getAct();
		Coder::code($action);
		$params=Request::getParams();
		Coder::codear($params);
	}

}

?>