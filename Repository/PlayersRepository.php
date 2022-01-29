<?php

namespace App\Repository;

use App\Models\Containers;
use App\Models\Players;
use App\Models\Vehicles;
use App\Models\Houses;

class PlayersRepository extends Players
{

    public static function getAllPlayers(){
        $players = new Players();
        $results = $players->query(['uid','pid','name','cash','bankacc']);
        return $results;
    }

    public static function getCountPlayers(){
        $players = new Players();
        $results = $players->query(['uid','pid','name','cash']);
        $results = count($results);
        return $results;
    }

    public static function getPlayer($uid){
        $player = new Players();
        $results = $player->query(['*'],['uid'=>$uid],'','');
        return $results;
    }

    public static function getPlayerHasVehicles($uid){
        $player = new Players();
        $results_pid = $player->query(['*'],['uid'=>$uid],'','');
        $vehicles = new Vehicles();
        $results = $vehicles->query(['*'],['pid'=>$results_pid[0]['pid']],'','');
        return $results;
    }


    public static function setLicensePlayer($type, $license,$uid){
        $player = new Players();
        $player->setUid($uid);
        if($type == 'civ') {
            $player->setCivLicenses($license);
        }else if($type == 'med'){
            $player->setMedLicenses($license);
        }else if($type =='cop'){
            $player->setCopLicenses($license);
        }
       $player->save();
    }

    public static function setNamePlayer($name, $uid){
        $player = new Players();
        $player->setUid($uid);
        $player->setName($name);
        $player->setAliases('"[`'.$name.'`]"');
        $player->save();
    }

    public static function setCashPlayer($cash, $uid){
        $player = new Players();
        $player->setUid($uid);
        $player->setCash($cash);
        $player->save();
    }

    public static function setBankaccPlayer($bankacc, $uid){
        $player = new Players();
        $player->setUid($uid);
        $player->setBankacc($bankacc);
        $player->save();
    }

    public static function deleteVehiclePlayer($vehicle){
        $vehicles = new Vehicles();
        $vehicles->delete($vehicle);
    }

    public static function deleteHousePlayer($house){
        $houses = new Houses();
        $houses->delete($house);
    }

    public static function deleteContainerPlayer($container){
        $containers = new Containers();
        $containers->delete($container);
    }

    public static function getPlayerHasHouses($uid){
        $player = new Players();
        $results_pid = $player->query(['*'],['uid'=>$uid],'','');
        $houses = new Houses();
        $results = $houses->query(['*'],['pid'=>$results_pid[0]['pid']],'','');
        return $results;
    }

    public static function getPlayerHasContainers($uid){
        $player = new Players();
        $results_pid = $player->query(['*'],['uid'=>$uid],'','');
        $containers = new Containers();
        $results = $containers->query(['*'],['pid'=>$results_pid[0]['pid']],'','');
        return $results;
    }

    public static function setCoplevelPlayer($coplevel, $uid){
        $player = new Players();
        $player->setUid($uid);
        $player->setCoplevel($coplevel);
        $player->save();
    }

    public static function setMediclevelPlayer($mediclevel, $uid){
        $player = new Players();
        $player->setUid($uid);
        $player->setMediclevel($mediclevel);
        $player->save();
    }

}