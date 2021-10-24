<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Log_death extends Database
{
    protected $id;
    protected $victimpid;
    protected $victimside;
    protected $victimlocation;
    protected $killerpid;
    protected $killerside;
    protected $killerlocation;
    protected $weapon;
    protected $distance;
    protected $status;
    protected $time_created;

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
    public function getVictimpid()
    {
        return $this->victimpid;
    }

    /**
     * @param mixed $victimpid
     */
    public function setVictimpid($victimpid)
    {
        $this->victimpid = $victimpid;
    }

    /**
     * @return mixed
     */
    public function getVictimside()
    {
        return $this->victimside;
    }

    /**
     * @param mixed $victimside
     */
    public function setVictimside($victimside)
    {
        $this->victimside = $victimside;
    }

    /**
     * @return mixed
     */
    public function getVictimlocation()
    {
        return $this->victimlocation;
    }

    /**
     * @param mixed $victimlocation
     */
    public function setVictimlocation($victimlocation)
    {
        $this->victimlocation = $victimlocation;
    }

    /**
     * @return mixed
     */
    public function getKillerpid()
    {
        return $this->killerpid;
    }

    /**
     * @param mixed $killerpid
     */
    public function setKillerpid($killerpid)
    {
        $this->killerpid = $killerpid;
    }

    /**
     * @return mixed
     */
    public function getKillerside()
    {
        return $this->killerside;
    }

    /**
     * @param mixed $killerside
     */
    public function setKillerside($killerside)
    {
        $this->killerside = $killerside;
    }

    /**
     * @return mixed
     */
    public function getKillerlocation()
    {
        return $this->killerlocation;
    }

    /**
     * @param mixed $killerlocation
     */
    public function setKillerlocation($killerlocation)
    {
        $this->killerlocation = $killerlocation;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTimeCreated()
    {
        return $this->time_created;
    }

    /**
     * @param mixed $time_created
     */
    public function setTimeCreated($time_created)
    {
        $this->time_created = $time_created;
    }

}