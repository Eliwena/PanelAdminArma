<?php

namespace App\Core;

/**
 * Class ConstantManager
 * @package App\Core
 * Classe qui gère et définit les constantes d'environnement du projet
 */
class ConstantManager
{

	private $envFile = ".env";
	private $data = [];

	public function __construct(){
		if(!file_exists($this->envFile)) {
		    return;
        }

		$this->parseFile($this->envFile);
		if(!empty($this->data["env"])){
			$this->parseFile($this->envFile.".".$this->data["env"]);
		}

		$this->defineConstants();
	}

	/**
	 * defineConstants
	 * @return void
	 * Reconnait tous les fichiers d'environnement (.env/.env.dev/.end.prod) et envoi leurs données dans la fonction defineConstant()
	 */
	public function defineConstants(){
		foreach ($this->data as $key => $value) {
			$this->defineConstant($key, $value);
		}
	}
	
	/**
	 * defineConstant
	 * @param  mixed $key
	 * @param  mixed $value
	 * @return void
	 * Définition des variables d'environnement depuis les fichiers d'environnement qui lui sont envoyés
	 */
	public static function defineConstant($key, $value) {
		$key = str_replace(" ", "_", mb_strtoupper(trim($key)));
		if(!defined($key)){
			define($key, trim($value));
		}else{
			die("Attention la constante ".$key." existe déjà");
		}
	}

	/**
	 * parseFile
	 * @param  mixed $file
	 * @return void
	 * Parcours le fichier envoyé et défini les index et leurs valeurs dans un tableau $this->data
	 */
	public function parseFile($file){
		$handle = fopen($file, "r");
		if(!empty($handle)){

			while (!feof($handle)) {
				$line = trim(fgets($handle));
				preg_match("/([^=]*)=([^#]*)/", $line, $results);
				if(!empty($results[1]) && !empty($results[2])){
					$this->data[$results[1]] = $results[2];
				}
			}

		}

	}

}