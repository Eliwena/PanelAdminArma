<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Containers extends Database
{
    protected $id;
    protected $pid;
    protected $classname;
    protected $pos;
    protected $inventory;
    protected $gear;
    protected $dir;
    protected $active;
    protected $owned;
    protected $insert_time;


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
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * @param mixed $pos
     */
    public function setPos($pos)
    {
        $this->pos = $pos;
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
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * @param mixed $dir
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
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
    public function getOwned()
    {
        return $this->owned;
    }

    /**
     * @param mixed $owned
     */
    public function setOwned($owned)
    {
        $this->owned = $owned;
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


}