<?php
namespace App;

use App\Core\Routing; 
use App\Core\ConstantManager; 
use App\Core\Database;
use App\Core\Security;

require "Autoloader.php";
Autoloader::register();
require "vendor/autoload.php";
new ConstantManager();

$uriExploded = explode("?", $_SERVER["REQUEST_URI"]);

$uri = $uriExploded[0];

$route = new Routing($uri);
$c = $route->getController();
$a = $route->getAction();

$cWithNamespace = $route->getControllerWithNamespace();
$security= Security::getInstance();
if( $uri == "/login" || $security->isConnected())
if (file_exists("./Controllers/" . $c . ".php")) {
    include "./Controllers/" . $c . ".php";

    if (class_exists($cWithNamespace)) {
        $cObject = new $cWithNamespace();

        if (method_exists($cObject, $a)) {
            $cObject->$a();
        } else {
            die("L'action " . $a . " n'existe pas");
        }
    } else {
        die("La classe " . $c . " n'existe pas");
    }
} else {
    die("Le fichier " . $c . " n'existe pas");
}else {
    header('Location: /login');
}
