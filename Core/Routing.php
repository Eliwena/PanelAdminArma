<?php

namespace App\Core;


class Routing {

	public $routesPath = "routes.yml";
	public $controller="MainController";
	public $action="default";
	public $routes = [];
	public $slugs = [];

	public function __construct($uri){
		$this->routes = yaml_parse_file($this->routesPath);
		//Faut vérifier qu'il y a un controller pour cette route
		if(!empty($this->routes[$uri])){
			$this->setController($this->routes[$uri]["controller"]);
			$this->setAction($this->routes[$uri]["action"]);
		}

		foreach ($this->routes as $slug=>$info) {
			$this->slugs[$info["controller"]][$info["action"]] = $slug;
		}

	}

	public function setController($controller){
		$this->controller=ucfirst(mb_strtolower($controller));
	}

	public function setAction($action){
		$this->action=$action."Action";
	}

	public function getController(){
		return $this->controller;
	}

	public function getAction(){
		return $this->action;
	}
	
	/**
	 * getControllerWithNamespace
	 * @return void
	 * Retourne le nom du controller dans le namespace par défaut
	 */
	public function getControllerWithNamespace(){
		return "\\App\\".$this->controller;
	}

    /**
     * getBaseUrl
     * @return string
	 * Retourne l'url de base sur laquelle on se situe
     */
    public static function getBaseUrl() {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];
    }
	
	/**
	 * getUri
	 * @param  mixed $controller
	 * @param  mixed $action
	 * @return void
	 * Si le controller et l'action sont bien récupérés depuis le fichier routes.yml, on retourne le controller et l'action
	 */
	public function getUri($controller, $action){
		if(!empty($this->slugs[$controller]) && !empty($this->slugs[$controller][$action]))
			return $this->slugs[$controller][$action];

		die("Aucun route ne correspond à ".$controller." -> ".$action );
	}

}