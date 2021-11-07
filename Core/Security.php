<?php

namespace App\Core;

use App\Models\Cw_users;

class Security {

    private static $_instance = null;
    private static $_userConnectedId = null;

    public function __construct($_userConnectedId = null) {
        self::$_userConnectedId = $_userConnectedId;
    }

    /**
     * @param null $_userConnectedId
     * @return Security|null
     * Retourne l'instance de l'utilisateur connecté
     */
    public static function getInstance($_userConnectedId = null) {
        if(is_null(self::$_instance)) {
            session_start();
            self::$_instance = new Security($_userConnectedId);
        }

        return self::$_instance;
    }

    /**
     * isConnected
     * Check si l'utilisateur est connecté
     * @return void
     */
    public static function isConnected(){
        return isset($_SESSION["userId"]);
    }

    /**
     * @return bool|void
     * Check si l'utilisateur est connecté
     * Check si les données envoyées depuis le formulaire correspondent à la base de données
     */
    public function getConnectedUser($name, $password){
        // Si déjà connecté
        if ($this->isConnected()){
            // $_SESSION['alert']['danger'][] = 'Vous êtes déjà connecté';
            return true;
        }

        // On vérifie si il y a une correspondance entre les informations de la machine de l'utilisateur et ce qu'on a stocké en base de données
        $utilisateur = new Cw_users();
        $result = $utilisateur->query(
            ["uid",'name', "primaryGroup","password"],
            ["name" => $name]
        );
        var_dump($password, $result[0]['password']);
            if(count($result)) {
                if (password_verify($password, $result[0]['password'])) {
                    $_SESSION["userId"] = $result[0]["uid"];
                    $_SESSION['name'] = $result[0]['name'];
                    // $_SESSION['alert']['success'] = ["titre" => "Succès", "message" => "Votre connexion a été renouvelé !"];
                    header('location: /');
                    session_write_close();
                }

        }
    }


    /**
     *
     */
    public function getDeconnectedUser(){
        unset($_SESSION['userId']);
    }

}

