<?php

namespace App;

use App\Core\View;
use App\Repository\VehiclesRepository;
use App\Repository\PlayersRepository;

class VehiclesController
{

    public function indexAction()
    {
        if($_SESSION['role'] === 'Helpeurs'){
            $view = new View('fraude','front');
        }else {
            $vehicles = VehiclesRepository::getAllVehicles();
            $players = PlayersRepository::getAllPlayers();
            $view = new View("vehicles", "front");
            $view->assign('vehicles', $vehicles);
            $view->assign('players', $players);
        }
    }

    public function editAction()
    {
        if($_SESSION['role'] === 'Helpeurs'){
            $view = new View('fraude','front');
        }else {
            $id = $_POST['id'];
            $vehicle = vehiclesRepository::getVehicle($id);
            $player = vehiclesRepository::getVehiculeHasPlayer($id);
            $view = new View("vehicle", "front");
            $view->assign('vehicle', $vehicle[0]);
            $view->assign('player', $player);
        }
    }

}
