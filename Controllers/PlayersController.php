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

    public function deleteAction()
    {
        if(isset($_POST['uid'])){
            PlayersRepository::deletePlayer(htmlspecialchars($_POST['uid']));
            echo $_POST['uid'];
        }
    }

    public function editNameAction(){
        if(isset($_POST['name'])) {
            PlayersRepository::setNamePlayer(htmlspecialchars($_POST['name']),htmlspecialchars($_POST['player']));
            echo $_POST['name'];
        }
    }

    public function editLicenseAction()
    {
        if(isset($_POST['license'])) {

            $class = explode(' ', htmlspecialchars($_POST['class']));
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

            $player = playersRepository::getPlayer(htmlspecialchars($_POST['player']));

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
            PlayersRepository::setLicensePlayer('med' ,$licensesConcat, htmlspecialchars($_POST['player']));
            }
            if (isset($cop)) {
                PlayersRepository::setLicensePlayer('cop', $licensesConcat, htmlspecialchars($_POST['player']));
            }
            if (isset($civ)) {
                PlayersRepository::setLicensePlayer('civ', $licensesConcat,htmlspecialchars($_POST['player']));
            }
            echo $_POST['license'];
        }
    }

    public function editCashAction(){
        if(isset($_POST['cash'])){
            PlayersRepository::setCashPlayer(htmlspecialchars($_POST['cash']),htmlspecialchars($_POST['player']));
            echo $_POST['cash'];
        }
    }

    public function editBankaccAction(){
        if(isset($_POST['bankacc'])){
            PlayersRepository::setBankaccPlayer(htmlspecialchars($_POST['bankacc']),htmlspecialchars($_POST['player']));
            echo $_POST['bankacc'];
        }
    }


    public function deleteVehicleAction(){
        if(isset($_POST['vehicle'])){
            PlayersRepository::deleteVehiclePlayer(htmlspecialchars($_POST['vehicle']));
            echo $_POST['vehicle'];
        }
    }

    public function deleteHouseAction(){
        if(isset($_POST['house'])){
            PlayersRepository::deleteHousePlayer(htmlspecialchars($_POST['house']));
            echo $_POST['house'];
        }
    }

    public function deleteContainerAction(){
        if(isset($_POST['container'])){
            PlayersRepository::deleteContainerPlayer(htmlspecialchars($_POST['container']));
            echo $_POST['container'];
        }
    }

    public function editCopLevelAction(){
        if(isset($_POST['coplevel'])){
            PlayersRepository::setCoplevelPlayer(htmlspecialchars($_POST['coplevel']),htmlspecialchars($_POST['player']));
            echo $_POST['coplevel'];
        }
    }


    public function editMedicLevelAction(){
        if(isset($_POST['mediclevel'])){
            PlayersRepository::setMediclevelPlayer(htmlspecialchars($_POST['mediclevel']),htmlspecialchars($_POST['player']));
            echo $_POST['mediclevel'];
        }
    }
}