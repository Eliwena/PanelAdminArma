<?php

namespace App\Repository;

use App\Models\Cw_permissions;
use App\Models\Cw_users;


class Cw_PermissionsRepository extends Cw_permissions
{
    public static function getAllPermissions(){
        $permissions = new Cw_permissions();
        $results = $permissions->query(['*']);
        return $results;
    }

    public static function getPermissionsById($id){
        $permissions = new Cw_permissions();
        $results = $permissions->query(['*'],['id'=>$id]);
        return $results;
    }


}