<?php

namespace App\Repository;

use App\Models\Vehicles;
use App\Models\Players;

class VehiclesRepository extends Vehicles
{
    public static function getAllVehicles(){
        $vehicles= new Vehicles();
        $results = $vehicles->query(['*']);
        return $results;
    }

    public static function getCountVehicles(){
        $vehicles = new Vehicles();
        $results = $vehicles->query(['*']);
        $results = count($results);
        return $results;
    }

    public static function getVehicle($id){
        $vehicles = new Vehicles();
        $results = $vehicles->query(['*'],['id'=>$id],'','');
        return $results;
    }
    public static function getVehiculeHasPlayer($id){
        $vehicles = new Vehicles();
        $results_pid = $vehicles->query(['*'],['id'=>$id],'','');
        $player = new Players();
        $results = $player->query(['*'],['pid'=>$results_pid[0]['pid']],'','');
        return $results;
    }

}