<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Cw_permissions extends Database
{
    protected $id;
    protected $group_name;
    protected $is_superUser;
    protected $can_view_players;
    protected $can_view_player;
    protected $can_view_vehicles;
    protected $can_view_vehicle;
    protected $can_view_player_civ_lic;
    protected $can_view_player_cop_lic;
    protected $can_view_player_ems_lic;
    protected $can_view_player_notes;
    protected $can_view_player_edit_log;
    protected $can_view_player_vehicles;
    protected $can_view_gangs;
    protected $can_view_containers;
    protected $can_view_houses;
    protected $can_edit_containers;
    protected $can_edit_house;
    protected $can_compensate;
    protected $can_blacklist;
    protected $can_add_note;
    protected $can_delete_note;
    protected $can_edit_cash;
    protected $can_edit_bank;
    protected $can_edit_donator;
    protected $can_edit_jailed;
    protected $can_edit_cop_rank;
    protected $can_edit_cop_lic;
    protected $can_edit_ems_rank;
    protected $can_edit_ems_lic;
    protected $can_edit_civ_lic;
    protected $can_edit_admin_rank;
    protected $can_edit_vehicle;
    protected $can_edit_gang;
    protected $can_edit_group_name;
    protected $can_edit_group_perms_player;
    protected $can_edit_group_perms_vehicle;
    protected $can_edit_group_perms_settings;
    protected $can_edit_group_perms_gang;
    protected $can_edit_group_perms;
    protected $can_edit_group_ips_id;
    protected $can_make_groups;
    protected $can_edit_users;
    protected $can_add_user;
    protected $can_del_user;
    protected $can_edit_group_perms_container;
    protected $can_edit_group_perms_house;

    public function __construct(){
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * @param mixed $group_name
     */
    public function setGroupName($group_name)
    {
        $this->group_name = $group_name;
    }

    /**
     * @return mixed
     */
    public function getIsSuperUser()
    {
        return $this->is_superUser;
    }

    /**
     * @param mixed $is_superUser
     */
    public function setIsSuperUser($is_superUser)
    {
        $this->is_superUser = $is_superUser;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayers()
    {
        return $this->can_view_players;
    }

    /**
     * @param mixed $can_view_players
     */
    public function setCanViewPlayers($can_view_players)
    {
        $this->can_view_players = $can_view_players;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayer()
    {
        return $this->can_view_player;
    }

    /**
     * @param mixed $can_view_player
     */
    public function setCanViewPlayer($can_view_player)
    {
        $this->can_view_player = $can_view_player;
    }

    /**
     * @return mixed
     */
    public function getCanViewVehicles()
    {
        return $this->can_view_vehicles;
    }

    /**
     * @param mixed $can_view_vehicles
     */
    public function setCanViewVehicles($can_view_vehicles)
    {
        $this->can_view_vehicles = $can_view_vehicles;
    }

    /**
     * @return mixed
     */
    public function getCanViewVehicle()
    {
        return $this->can_view_vehicle;
    }

    /**
     * @param mixed $can_view_vehicle
     */
    public function setCanViewVehicle($can_view_vehicle)
    {
        $this->can_view_vehicle = $can_view_vehicle;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayerCivLic()
    {
        return $this->can_view_player_civ_lic;
    }

    /**
     * @param mixed $can_view_player_civ_lic
     */
    public function setCanViewPlayerCivLic($can_view_player_civ_lic)
    {
        $this->can_view_player_civ_lic = $can_view_player_civ_lic;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayerCopLic()
    {
        return $this->can_view_player_cop_lic;
    }

    /**
     * @param mixed $can_view_player_cop_lic
     */
    public function setCanViewPlayerCopLic($can_view_player_cop_lic)
    {
        $this->can_view_player_cop_lic = $can_view_player_cop_lic;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayerEmsLic()
    {
        return $this->can_view_player_ems_lic;
    }

    /**
     * @param mixed $can_view_player_ems_lic
     */
    public function setCanViewPlayerEmsLic($can_view_player_ems_lic)
    {
        $this->can_view_player_ems_lic = $can_view_player_ems_lic;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayerNotes()
    {
        return $this->can_view_player_notes;
    }

    /**
     * @param mixed $can_view_player_notes
     */
    public function setCanViewPlayerNotes($can_view_player_notes)
    {
        $this->can_view_player_notes = $can_view_player_notes;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayerEditLog()
    {
        return $this->can_view_player_edit_log;
    }

    /**
     * @param mixed $can_view_player_edit_log
     */
    public function setCanViewPlayerEditLog($can_view_player_edit_log)
    {
        $this->can_view_player_edit_log = $can_view_player_edit_log;
    }

    /**
     * @return mixed
     */
    public function getCanViewPlayerVehicles()
    {
        return $this->can_view_player_vehicles;
    }

    /**
     * @param mixed $can_view_player_vehicles
     */
    public function setCanViewPlayerVehicles($can_view_player_vehicles)
    {
        $this->can_view_player_vehicles = $can_view_player_vehicles;
    }

    /**
     * @return mixed
     */
    public function getCanViewGangs()
    {
        return $this->can_view_gangs;
    }

    /**
     * @param mixed $can_view_gangs
     */
    public function setCanViewGangs($can_view_gangs)
    {
        $this->can_view_gangs = $can_view_gangs;
    }

    /**
     * @return mixed
     */
    public function getCanViewContainers()
    {
        return $this->can_view_containers;
    }

    /**
     * @param mixed $can_view_containers
     */
    public function setCanViewContainers($can_view_containers)
    {
        $this->can_view_containers = $can_view_containers;
    }

    /**
     * @return mixed
     */
    public function getCanViewHouses()
    {
        return $this->can_view_houses;
    }

    /**
     * @param mixed $can_view_houses
     */
    public function setCanViewHouses($can_view_houses)
    {
        $this->can_view_houses = $can_view_houses;
    }

    /**
     * @return mixed
     */
    public function getCanEditContainers()
    {
        return $this->can_edit_containers;
    }

    /**
     * @param mixed $can_edit_containers
     */
    public function setCanEditContainers($can_edit_containers)
    {
        $this->can_edit_containers = $can_edit_containers;
    }

    /**
     * @return mixed
     */
    public function getCanEditHouse()
    {
        return $this->can_edit_house;
    }

    /**
     * @param mixed $can_edit_house
     */
    public function setCanEditHouse($can_edit_house)
    {
        $this->can_edit_house = $can_edit_house;
    }

    /**
     * @return mixed
     */
    public function getCanCompensate()
    {
        return $this->can_compensate;
    }

    /**
     * @param mixed $can_compensate
     */
    public function setCanCompensate($can_compensate)
    {
        $this->can_compensate = $can_compensate;
    }

    /**
     * @return mixed
     */
    public function getCanBlacklist()
    {
        return $this->can_blacklist;
    }

    /**
     * @param mixed $can_blacklist
     */
    public function setCanBlacklist($can_blacklist)
    {
        $this->can_blacklist = $can_blacklist;
    }

    /**
     * @return mixed
     */
    public function getCanAddNote()
    {
        return $this->can_add_note;
    }

    /**
     * @param mixed $can_add_note
     */
    public function setCanAddNote($can_add_note)
    {
        $this->can_add_note = $can_add_note;
    }

    /**
     * @return mixed
     */
    public function getCanDeleteNote()
    {
        return $this->can_delete_note;
    }

    /**
     * @param mixed $can_delete_note
     */
    public function setCanDeleteNote($can_delete_note)
    {
        $this->can_delete_note = $can_delete_note;
    }

    /**
     * @return mixed
     */
    public function getCanEditCash()
    {
        return $this->can_edit_cash;
    }

    /**
     * @param mixed $can_edit_cash
     */
    public function setCanEditCash($can_edit_cash)
    {
        $this->can_edit_cash = $can_edit_cash;
    }

    /**
     * @return mixed
     */
    public function getCanEditBank()
    {
        return $this->can_edit_bank;
    }

    /**
     * @param mixed $can_edit_bank
     */
    public function setCanEditBank($can_edit_bank)
    {
        $this->can_edit_bank = $can_edit_bank;
    }

    /**
     * @return mixed
     */
    public function getCanEditDonator()
    {
        return $this->can_edit_donator;
    }

    /**
     * @param mixed $can_edit_donator
     */
    public function setCanEditDonator($can_edit_donator)
    {
        $this->can_edit_donator = $can_edit_donator;
    }

    /**
     * @return mixed
     */
    public function getCanEditJailed()
    {
        return $this->can_edit_jailed;
    }

    /**
     * @param mixed $can_edit_jailed
     */
    public function setCanEditJailed($can_edit_jailed)
    {
        $this->can_edit_jailed = $can_edit_jailed;
    }

    /**
     * @return mixed
     */
    public function getCanEditCopRank()
    {
        return $this->can_edit_cop_rank;
    }

    /**
     * @param mixed $can_edit_cop_rank
     */
    public function setCanEditCopRank($can_edit_cop_rank)
    {
        $this->can_edit_cop_rank = $can_edit_cop_rank;
    }

    /**
     * @return mixed
     */
    public function getCanEditCopLic()
    {
        return $this->can_edit_cop_lic;
    }

    /**
     * @param mixed $can_edit_cop_lic
     */
    public function setCanEditCopLic($can_edit_cop_lic)
    {
        $this->can_edit_cop_lic = $can_edit_cop_lic;
    }

    /**
     * @return mixed
     */
    public function getCanEditEmsRank()
    {
        return $this->can_edit_ems_rank;
    }

    /**
     * @param mixed $can_edit_ems_rank
     */
    public function setCanEditEmsRank($can_edit_ems_rank)
    {
        $this->can_edit_ems_rank = $can_edit_ems_rank;
    }

    /**
     * @return mixed
     */
    public function getCanEditEmsLic()
    {
        return $this->can_edit_ems_lic;
    }

    /**
     * @param mixed $can_edit_ems_lic
     */
    public function setCanEditEmsLic($can_edit_ems_lic)
    {
        $this->can_edit_ems_lic = $can_edit_ems_lic;
    }

    /**
     * @return mixed
     */
    public function getCanEditCivLic()
    {
        return $this->can_edit_civ_lic;
    }

    /**
     * @param mixed $can_edit_civ_lic
     */
    public function setCanEditCivLic($can_edit_civ_lic)
    {
        $this->can_edit_civ_lic = $can_edit_civ_lic;
    }

    /**
     * @return mixed
     */
    public function getCanEditAdminRank()
    {
        return $this->can_edit_admin_rank;
    }

    /**
     * @param mixed $can_edit_admin_rank
     */
    public function setCanEditAdminRank($can_edit_admin_rank)
    {
        $this->can_edit_admin_rank = $can_edit_admin_rank;
    }

    /**
     * @return mixed
     */
    public function getCanEditVehicle()
    {
        return $this->can_edit_vehicle;
    }

    /**
     * @param mixed $can_edit_vehicle
     */
    public function setCanEditVehicle($can_edit_vehicle)
    {
        $this->can_edit_vehicle = $can_edit_vehicle;
    }

    /**
     * @return mixed
     */
    public function getCanEditGang()
    {
        return $this->can_edit_gang;
    }

    /**
     * @param mixed $can_edit_gang
     */
    public function setCanEditGang($can_edit_gang)
    {
        $this->can_edit_gang = $can_edit_gang;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupName()
    {
        return $this->can_edit_group_name;
    }

    /**
     * @param mixed $can_edit_group_name
     */
    public function setCanEditGroupName($can_edit_group_name)
    {
        $this->can_edit_group_name = $can_edit_group_name;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPermsPlayer()
    {
        return $this->can_edit_group_perms_player;
    }

    /**
     * @param mixed $can_edit_group_perms_player
     */
    public function setCanEditGroupPermsPlayer($can_edit_group_perms_player)
    {
        $this->can_edit_group_perms_player = $can_edit_group_perms_player;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPermsVehicle()
    {
        return $this->can_edit_group_perms_vehicle;
    }

    /**
     * @param mixed $can_edit_group_perms_vehicle
     */
    public function setCanEditGroupPermsVehicle($can_edit_group_perms_vehicle)
    {
        $this->can_edit_group_perms_vehicle = $can_edit_group_perms_vehicle;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPermsSettings()
    {
        return $this->can_edit_group_perms_settings;
    }

    /**
     * @param mixed $can_edit_group_perms_settings
     */
    public function setCanEditGroupPermsSettings($can_edit_group_perms_settings)
    {
        $this->can_edit_group_perms_settings = $can_edit_group_perms_settings;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPermsGang()
    {
        return $this->can_edit_group_perms_gang;
    }

    /**
     * @param mixed $can_edit_group_perms_gang
     */
    public function setCanEditGroupPermsGang($can_edit_group_perms_gang)
    {
        $this->can_edit_group_perms_gang = $can_edit_group_perms_gang;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPerms()
    {
        return $this->can_edit_group_perms;
    }

    /**
     * @param mixed $can_edit_group_perms
     */
    public function setCanEditGroupPerms($can_edit_group_perms)
    {
        $this->can_edit_group_perms = $can_edit_group_perms;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupIpsId()
    {
        return $this->can_edit_group_ips_id;
    }

    /**
     * @param mixed $can_edit_group_ips_id
     */
    public function setCanEditGroupIpsId($can_edit_group_ips_id)
    {
        $this->can_edit_group_ips_id = $can_edit_group_ips_id;
    }

    /**
     * @return mixed
     */
    public function getCanMakeGroups()
    {
        return $this->can_make_groups;
    }

    /**
     * @param mixed $can_make_groups
     */
    public function setCanMakeGroups($can_make_groups)
    {
        $this->can_make_groups = $can_make_groups;
    }

    /**
     * @return mixed
     */
    public function getCanEditUsers()
    {
        return $this->can_edit_users;
    }

    /**
     * @param mixed $can_edit_users
     */
    public function setCanEditUsers($can_edit_users)
    {
        $this->can_edit_users = $can_edit_users;
    }

    /**
     * @return mixed
     */
    public function getCanAddUser()
    {
        return $this->can_add_user;
    }

    /**
     * @param mixed $can_add_user
     */
    public function setCanAddUser($can_add_user)
    {
        $this->can_add_user = $can_add_user;
    }

    /**
     * @return mixed
     */
    public function getCanDelUser()
    {
        return $this->can_del_user;
    }

    /**
     * @param mixed $can_del_user
     */
    public function setCanDelUser($can_del_user)
    {
        $this->can_del_user = $can_del_user;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPermsContainer()
    {
        return $this->can_edit_group_perms_container;
    }

    /**
     * @param mixed $can_edit_group_perms_container
     */
    public function setCanEditGroupPermsContainer($can_edit_group_perms_container)
    {
        $this->can_edit_group_perms_container = $can_edit_group_perms_container;
    }

    /**
     * @return mixed
     */
    public function getCanEditGroupPermsHouse()
    {
        return $this->can_edit_group_perms_house;
    }

    /**
     * @param mixed $can_edit_group_perms_house
     */
    public function setCanEditGroupPermsHouse($can_edit_group_perms_house)
    {
        $this->can_edit_group_perms_house = $can_edit_group_perms_house;
    }



}