<?php

namespace App;

use App\Core\View;

class MainController {

	/**
	 * Action par défaut du site permettant d'afficher la vue "default" en utilisant la template home
	 */
	public function homeAction(){

		$view = new View("default", "front");
	}

	/**
	 * Action par défaut permettant d'afficher la vue "default" du répertoire WebPlanning/ en utilisant la template du front-office
	 */
	public function webplanningAction(){
		$view = new View("WebPlanning/default", "front");
	}

	/**
	 * Action par défaut permettant d'afficher la vue "default" du répertoire OLPR/ en utilisant la template du front-office
	 */
	public function olprAction(){
		$view = new View("OLPR/default", "front");
	}
}