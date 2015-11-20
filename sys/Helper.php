<?php

spl_autoload_register(null,false);
spl_autoload_register('Autoload::sysLoader');

class Autoload{
	static function sysLoader($class){
		$filename = strtolower($class).'.php';
		$file = ROOT.'sys'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
		require $file;
	}
}

/**
 * Coder
 * Makes var_dump easy
 * @author A.Lorman
**/

class Coder{

	static function code($var){
		echo '<pre>'.$var.'</pre>';
	}

	static function codear($var){
		echo '<pre>'.var_dump($var).'</pre>';
	}

}

?>