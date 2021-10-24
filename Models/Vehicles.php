<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Vehicles extends Database
{
    protected $id;
    protected $pid;
    protected $side;
    protected $classname;
    protected $type;
    protected $alive;
    protected $blacklist;
    protected $active;
    protected $plate;
    protected $color;
    protected $inventory;
    protected $gear;
    protected $fuel;
    protected $damage;
    protected $insert_time;
    protected $entreprise_id;
    protected $insure;
    protected $immatriculation;
    protected $fourriere;
    protected $tuning;
    protected $tuningcolor;
    protected $newrvmattuning;
    protected $newtexturetunning;

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
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return mixed
     */
    public function getSide()
    {
        return $this->side;
    }

    /**
     * @param mixed $side
     */
    public function setSide($side)
    {
        $this->side = $side;
    }

    /**
     * @return mixed
     */
    public function getClassname()
    {
        return $this->classname;
    }

    /**
     * @param mixed $classname
     */
    public function setClassname($classname)
    {
        $this->classname = $classname;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getAlive()
    {
        return $this->alive;
    }

    /**
     * @param mixed $alive
     */
    public function setAlive($alive)
    {
        $this->alive = $alive;
    }

    /**
     * @return mixed
     */
    public function getBlacklist()
    {
        return $this->blacklist;
    }

    /**
     * @param mixed $blacklist
     */
    public function setBlacklist($blacklist)
    {
        $this->blacklist = $blacklist;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getPlate()
    {
        return $this->plate;
    }

    /**
     * @param mixed $plate
     */
    public function setPlate($plate)
    {
        $this->plate = $plate;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * @param mixed $inventory
     */
    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
    }

    /**
     * @return mixed
     */
    public function getGear()
    {
        return $this->gear;
    }

    /**
     * @param mixed $gear
     */
    public function setGear($gear)
    {
        $this->gear = $gear;
    }

    /**
     * @return mixed
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * @return mixed
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @param mixed $damage
     */
    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    /**
     * @return mixed
     */
    public function getInsertTime()
    {
        return $this->insert_time;
    }

    /**
     * @param mixed $insert_time
     */
    public function setInsertTime($insert_time)
    {
        $this->insert_time = $insert_time;
    }

    /**
     * @return mixed
     */
    public function getEntrepriseId()
    {
        return $this->entreprise_id;
    }

    /**
     * @param mixed $entreprise_id
     */
    public function setEntrepriseId($entreprise_id)
    {
        $this->entreprise_id = $entreprise_id;
    }

    /**
     * @return mixed
     */
    public function getInsure()
    {
        return $this->insure;
    }

    /**
     * @param mixed $insure
     */
    public function setInsure($insure)
    {
        $this->insure = $insure;
    }

    /**
     * @return mixed
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * @param mixed $immatriculation
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    }

    /**
     * @return mixed
     */
    public function getFourriere()
    {
        return $this->fourriere;
    }

    /**
     * @param mixed $fourriere
     */
    public function setFourriere($fourriere)
    {
        $this->fourriere = $fourriere;
    }

    /**
     * @return mixed
     */
    public function getTuning()
    {
        return $this->tuning;
    }

    /**
     * @param mixed $tuning
     */
    public function setTuning($tuning)
    {
        $this->tuning = $tuning;
    }

    /**
     * @return mixed
     */
    public function getTuningcolor()
    {
        return $this->tuningcolor;
    }

    /**
     * @param mixed $tuningcolor
     */
    public function setTuningcolor($tuningcolor)
    {
        $this->tuningcolor = $tuningcolor;
    }

    /**
     * @return mixed
     */
    public function getNewrvmattuning()
    {
        return $this->newrvmattuning;
    }

    /**
     * @param mixed $newrvmattuning
     */
    public function setNewrvmattuning($newrvmattuning)
    {
        $this->newrvmattuning = $newrvmattuning;
    }

    /**
     * @return mixed
     */
    public function getNewtexturetunning()
    {
        return $this->newtexturetunning;
    }

    /**
     * @param mixed $newtexturetunning
     */
    public function setNewtexturetunning($newtexturetunning)
    {
        $this->newtexturetunning = $newtexturetunning;
    }


}