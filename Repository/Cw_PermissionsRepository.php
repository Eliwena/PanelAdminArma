<?php

namespace App\Repository;

use App\Models\Cw_permissions;


class Cw_PermissionsRepository extends Cw_permissions
{
    public static function getAllPermissions(){
        $permissions = new Cw_permissions();
        $results = $permissions->query(['*']);
        return $results;
    }



}