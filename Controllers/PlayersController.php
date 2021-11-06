<?php

namespace App;

use App\Core\View;
use App\Repository\Cw_UserRepository;
use App\Repository\PlayersRepository;
use App\Models\Players;
class PlayersController
{

    public function indexAction()
    {
        $players = playersRepository::getAllPlayers();

        $view = new View("players", "front");
        $view->assign('players', $players);

    }

    public function editAction()
    {
        $uid = $_POST['uid'];
        $player = playersRepository::getPlayer($uid);
        $vehicles = playersRepository::getPlayerHasVehicles($uid);
        $houses = PlayersRepository::getPlayerHasHouses($uid);
        $containers = PlayersRepository::getPlayerHasContainers($uid);
        $view = new View("player", "front");
        $view->assign('player', $player[0]);
        $view->assign('vehicles', $vehicles);
        $view->assign('houses', $houses);
        $view->assign('containers', $containers);
    }

    public function editNameAction(){
        if(isset($_POST['name'])) {

            PlayersRepository::setNamePlayer($_POST['name'],$_POST['player']);

            echo $_POST['name'];

        }
    }

    public function editLicenseAction()
    {
        if(isset($_POST['license'])) {

            $class = explode(' ', $_POST['class']);
            foreach ($class as $Oneclass) {
                if ($Oneclass == 'active') {
                    $active = 1;
                }
                if ($Oneclass == 'med') {
                    $med = 1;
                }
                if ($Oneclass == 'cop') {
                    $cop = 1;
                }
                if ($Oneclass == 'civ') {
                    $civ = 1;
                }
            }


            $player = playersRepository::getPlayer($_POST['player']);

            if (isset($med)) {
                $license = $player[0]['med_licenses'];
            }

            if (isset($cop)) {
                $license = $player[0]['cop_licenses'];
            }

            if (isset($civ)) {
                $license = $player[0]['civ_licenses'];
            }

            $licensesConcat = "";
            $licenses = explode("],[", $license);
            $licenses = str_replace('"[[', '', $licenses);
            $licenses = str_replace(']]"', '', $licenses);
            $licenses = str_replace('`', '', $licenses);
            foreach ($licenses as $Onelicenses) {
                $Onelicenses = explode(',', $Onelicenses);
                if ($Onelicenses[0] == $_POST['license']) {
                    if (isset($active)) {
                        $Onelicenses[1] = '0';
                    } else {
                        $Onelicenses[1] = '1';
                    }
                }
                $Onelicenses[0] = '`' . $Onelicenses[0] . '`';
                $Onelicenses = implode(',', $Onelicenses);
                $Onelicenses = '[' . $Onelicenses . ']';
                $licensesConcat .= $Onelicenses . ',';


            }
            $licensesConcat = rtrim($licensesConcat, ',');
            $licensesConcat = '"[' . $licensesConcat . ']"';


            if (isset($med)) {
            PlayersRepository::setLicensePlayer('med' ,$licensesConcat, $_POST['player']);
            }

            if (isset($cop)) {
                PlayersRepository::setLicensePlayer('cop', $licensesConcat, $_POST['player']);
            }

            if (isset($civ)) {
                PlayersRepository::setLicensePlayer('civ', $licensesConcat, $_POST['player']);
            }

            echo $_POST['license'];
        }
    }

    public function editCashAction(){

        if(isset($_POST['cash'])){

            PlayersRepository::setCashPlayer($_POST['cash'],$_POST['player']);

            echo $_POST['cash'];
        }
    }

    public function editBankaccAction(){

        if(isset($_POST['bankacc'])){

            PlayersRepository::setBankaccPlayer($_POST['bankacc'],$_POST['player']);

            echo $_POST['bankacc'];
        }
    }


    public function deleteVehicleAction(){
        if(isset($_POST['vehicle'])){
            PlayersRepository::deleteVehiclePlayer($_POST['vehicle']);
            echo $_POST['vehicle'];
        }
    }
}