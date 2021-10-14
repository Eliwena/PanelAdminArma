<?php

namespace App\Core;

use App\Core\Form;

class View
{
	private $template; // front ou back
	private $view; // default, dashboard, profile, ...
	private $data = [];

	public function __construct($view="default", $template="front"){
		$this->setTemplate($template);
		$this->setView($view);
	}

	/**
	 * getAssets
	 * @param  mixed $nameFile
	 * @return void
	 * Renvoie le fichier passé en paramètre et l'ajoute à une vue ou un modèle.
	 */
	public static function getAssets(string $nameFile){
		$explodedNameFile = explode(".", trim($nameFile));
		$nameFileType = array_pop($explodedNameFile);
		
		switch ($nameFileType){
			case "css" :
				echo Routing::getBaseUrl() . '/public/styles/'.$nameFile;
				return;
			case ($nameFileType == "png" || $nameFileType == "jpg" || $nameFileType == "svg" || $nameFileType == "jpeg") :
				echo Routing::getBaseUrl() . '/public/images/'.$nameFile;
				return;
			case ($nameFileType == "js") :
				echo Routing::getBaseUrl() . '/public/scripts/js/'.$nameFile;
				return;
			default :
				return;
		}
	}
	
	/**
	 * setTemplate
	 * @param  mixed $template
	 * @return void
	 * Définit la template utilisé (back ou front) et fait appel à elle
	 */
	public function setTemplate($template){
		if(file_exists("Views/Templates/".$template."_tpl.php")){
			$this->template = "Views/Templates/".$template."_tpl.php";
		}else{
			die("Le template n'existe pas");
		}
	}

		
	/**
	 * setView
	 * @param  mixed $view
	 * @return void
	 * Définit la vue utilisé et fait appel à elle
	 */
	public function setView($view){
		if(file_exists("Views/".$view."_view.php")){
			$this->view = "Views/".$view."_view.php";
		}else{
			die("La vue n'existe pas");
		}
	}
	
	/**
	 * assign
	 *
	 * @param  mixed $key
	 * @param  mixed $value
	 * @return void
	 */
	public function assign($key, $value){
		$this->data[$key] = $value;
	}
	
	/**
	 * __destruct
	 *
	 * @return void
	 */
	public function __destruct(){
		extract($this->data);
		include $this->template;
	}
}




