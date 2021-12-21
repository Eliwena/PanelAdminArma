<?php

namespace App;

use App\Core\Security;
use App\Core\View;
use App\Repository\Cw_PermissionsRepository;
use App\Repository\Cw_UserRepository;


class CwUserController {

    public function indexAction()
    {
        $users = Cw_UserRepository::getAllUsers();
        $permissions = Cw_PermissionsRepository::getAllPermissions();
        $view = new View("users", "front");
        $view->assign('users', $users);
        $view->assign('permissions', $permissions);

    }

    public function newAction(){
        $permissions = Cw_PermissionsRepository::getAllPermissions();
        $param = 0;
        if(isset($_POST['save'])){
            $name = htmlspecialchars($_POST['name']);
            $password = htmlspecialchars($_POST['password']);
            $email = htmlspecialchars($_POST['email']);
            $role = htmlspecialchars($_POST['role']);

            Cw_UserRepository::saveUser($name,$email,$password,$role);
            $param = 1;
        }
        $view = new View("newuser","front");
        $view->assign('permissions',$permissions);
        $view->assign('param',$param);
    }

}