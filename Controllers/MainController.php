<?php

namespace App;

use App\Core\Security;
use App\Core\View;
use App\Models\Cw_users;
use App\Repository\Cw_UserRepository;
use App\Repository\PlayersRepository;
use App\Repository\VehiclesRepository;

class MainController {

	/**
	 * Action par défaut du site permettant d'afficher la vue "default" en utilisant la template home
	 */
	public function homeAction(){

	    if(isset($_SESSION['userId'])) {
            $players = PlayersRepository::getCountPlayers();
            $vehicles = vehiclesRepository::getCountVehicles();
            $view = new View("default", "front");
            $view->assign('countPlayers', $players);
            $view->assign('countVehicles', $vehicles);

        }else {
            header('Location: /login');
        }
    }

    public function loginAction(){
        $security = new Security();
        if($security->isConnected()) {
            $_SESSION['alert']['success'] = ["titre" => "Succès", "message" => "Vous êtes déjà connecté !"];
            header('Location: /');
        }

        // On récupère les données envoyées par le formulaire et on enregistre les infos de l'utilisateur en base de données
        // Puis on fait un check entre les infos de l'utilisateur et la base de données pour le rediriger sur l'accueil et créé sa session via la fonction getConnectedUser()
        if(!empty($_POST)) {
            if($security->getConnectedUser($_POST['name'],$_POST['password'])) {
                $_SESSION['alert']['success'] = ["titre" => "Succès", "message" => "Votre inscription a été effectué avec succès !"];
                header('location: /');
                session_write_close();
            }
        }

        // Si on accède à l'url /connexion sans avoir de session et sans avoir envoyé les données du formulaire on affiche la vue login
        $view = new View("login", "home");

    }

    public function logoutAction(){
        $security = new Security();
        $security->getDeconnectedUser();
        header('location: /');

    }
}