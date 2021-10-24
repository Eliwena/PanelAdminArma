<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Cw_permissions extends Database
{
    protected $id;
    protected $group_name;
    protected $group_id;
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

}