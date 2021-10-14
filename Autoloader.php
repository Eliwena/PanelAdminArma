<?php
namespace App;

class Autoloader
{	
	/**
	 * register
	 * @return void
	 * Méthode appelé automatiquement lors des différents appels de classes pour inclure le fichier de la classe en question
	 */
	public static function register(){
		spl_autoload_register(function ($class){
			$class = str_ireplace(__NAMESPACE__, "", $class);
			$class = str_ireplace("\\", "/", $class);
			$class = ltrim($class, "/");
			if(file_exists($class.".php")){
				include $class.".php";
			}
		});
	}
}