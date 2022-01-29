<?php

namespace App;

use App\Core\Security;
use App\Core\View;
use App\Repository\Cw_PermissionsRepository;
use App\Repository\Cw_UserRepository;


class CwUserController {

    public function indexAction()
    {
        if($_SESSION['superRole'] !== 1){
            $view = new View('fraude','front');
        }else {
            $users = Cw_UserRepository::getAllUsers();
            $permissions = Cw_PermissionsRepository::getAllPermissions();
            $view = new View("users", "front");
            $view->assign('users', $users);
            $view->assign('permissions', $permissions);
        }
    }

    public function newAction()
    {
        if ($_SESSION['superRole'] !== 1) {
            $view = new View('fraude', 'front');
        } else {
            $permissions = Cw_PermissionsRepository::getAllPermissions();
            $param = 0;
            if (isset($_POST['save'])) {
                $name = htmlspecialchars($_POST['name']);
                $password = htmlspecialchars($_POST['password']);
                $email = htmlspecialchars($_POST['email']);
                $role = htmlspecialchars($_POST['role']);

                Cw_UserRepository::saveUser($name, $email, $password, $role);
                $param = 1;
            }
            $view = new View("newuser", "front");
            $view->assign('permissions', $permissions);
            $view->assign('param', $param);
        }
    }

    public function editAction()
    {
        $uid = $_POST['uid'];
        $user = Cw_UserRepository::getUser($uid);
        $roles = Cw_PermissionsRepository::getAllPermissions();
        $view = new View("user", "front");
        $view->assign('user', $user[0]);
        $view->assign('roles', $roles);
    }

    public function editRoleAction(){
        if(isset($_POST['role'])){
            Cw_UserRepository::setRoleUser(htmlspecialchars($_POST['role']),htmlspecialchars($_POST['user']));
            echo $_POST['role'];
        }
    }
}