<?php

namespace App\Repository;

use App\Models\Cw_users;


class Cw_UserRepository extends Cw_users
{
    public static function getAllUsers(){
        $user = new Cw_users();
        $results = $user->query(['*']);
        return $results;
    }

    public static function saveUser($name,$email,$password,$role){
        $user = new Cw_users();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPrimaryGroup($role);
        $user->setPassword(password_hash($password,PASSWORD_DEFAULT));
        $user->setCreatedAt(date("Y-m-d H:i:s"));
        $user->save();
    }

    public static function getUser($uid){
        $user = new Cw_users();
        $results = $user->query(['*'],['uid'=>$uid],'','');
        return $results;
    }

    public static function setRoleUser($role, $uid){
        $user = new Cw_users();
        $user->setUid($uid);
        $user->setPrimaryGroup($role);
        $user->save();
    }
}