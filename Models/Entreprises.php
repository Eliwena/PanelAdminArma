<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Entreprises extends Database
{
    protected $id;
    protected $name;
    protected $pdg_pid;
    protected $pdg_name;
    protected $members;
    protected $prices;
    protected $items_stock;
    protected $max_stock;
    protected $items_stock_2;
    protected $max_stock_2;
    protected $bankacc;
    protected $position;
    protected $objects;
    protected $type;
    protected $active;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPdgPid()
    {
        return $this->pdg_pid;
    }

    /**
     * @param mixed $pdg_pid
     */
    public function setPdgPid($pdg_pid)
    {
        $this->pdg_pid = $pdg_pid;
    }

    /**
     * @return mixed
     */
    public function getPdgName()
    {
        return $this->pdg_name;
    }

    /**
     * @param mixed $pdg_name
     */
    public function setPdgName($pdg_name)
    {
        $this->pdg_name = $pdg_name;
    }

    /**
     * @return mixed
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param mixed $members
     */
    public function setMembers($members)
    {
        $this->members = $members;
    }

    /**
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param mixed $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @return mixed
     */
    public function getItemsStock()
    {
        return $this->items_stock;
    }

    /**
     * @param mixed $items_stock
     */
    public function setItemsStock($items_stock)
    {
        $this->items_stock = $items_stock;
    }

    /**
     * @return mixed
     */
    public function getMaxStock()
    {
        return $this->max_stock;
    }

    /**
     * @param mixed $max_stock
     */
    public function setMaxStock($max_stock)
    {
        $this->max_stock = $max_stock;
    }

    /**
     * @return mixed
     */
    public function getItemsStock2()
    {
        return $this->items_stock_2;
    }

    /**
     * @param mixed $items_stock_2
     */
    public function setItemsStock2($items_stock_2)
    {
        $this->items_stock_2 = $items_stock_2;
    }

    /**
     * @return mixed
     */
    public function getMaxStock2()
    {
        return $this->max_stock_2;
    }

    /**
     * @param mixed $max_stock_2
     */
    public function setMaxStock2($max_stock_2)
    {
        $this->max_stock_2 = $max_stock_2;
    }

    /**
     * @return mixed
     */
    public function getBankacc()
    {
        return $this->bankacc;
    }

    /**
     * @param mixed $bankacc
     */
    public function setBankacc($bankacc)
    {
        $this->bankacc = $bankacc;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * @param mixed $objects
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
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