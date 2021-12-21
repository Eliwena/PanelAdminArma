<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Cw_permissions extends Database
{
    protected $id;
    protected $group_name;
    protected $is_superUser;


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




}