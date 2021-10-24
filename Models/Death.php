<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Death extends Database
{
    protected $id;
    protected $killed;
    protected $killer;
    protected $weapon;
    protected $distance;
    protected $inset_time;

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
    public function getKilled()
    {
        return $this->killed;
    }

    /**
     * @param mixed $killed
     */
    public function setKilled($killed)
    {
        $this->killed = $killed;
    }

    /**
     * @return mixed
     */
    public function getKiller()
    {
        return $this->killer;
    }

    /**
     * @param mixed $killer
     */
    public function setKiller($killer)
    {
        $this->killer = $killer;
    }

    /**
     * @return mixed
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param mixed $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getInsetTime()
    {
        return $this->inset_time;
    }

    /**
     * @param mixed $inset_time
     */
    public function setInsetTime($inset_time)
    {
        $this->inset_time = $inset_time;
    }

}