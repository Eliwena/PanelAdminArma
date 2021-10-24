<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Cw_logs extends Database
{
    protected $id;
    protected $user_id;
    protected $type;
    protected $message;
    protected $player_id;
    protected $vehicle_id;
    protected $container_id;
    protected $gang_id;
    protected $house_id;
    protected $created_at;
    protected $updated_at;

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
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getPlayerId()
    {
        return $this->player_id;
    }

    /**
     * @param mixed $player_id
     */
    public function setPlayerId($player_id)
    {
        $this->player_id = $player_id;
    }

    /**
     * @return mixed
     */
    public function getVehicleId()
    {
        return $this->vehicle_id;
    }

    /**
     * @param mixed $vehicle_id
     */
    public function setVehicleId($vehicle_id)
    {
        $this->vehicle_id = $vehicle_id;
    }

    /**
     * @return mixed
     */
    public function getContainerId()
    {
        return $this->container_id;
    }

    /**
     * @param mixed $container_id
     */
    public function setContainerId($container_id)
    {
        $this->container_id = $container_id;
    }

    /**
     * @return mixed
     */
    public function getGangId()
    {
        return $this->gang_id;
    }

    /**
     * @param mixed $gang_id
     */
    public function setGangId($gang_id)
    {
        $this->gang_id = $gang_id;
    }

    /**
     * @return mixed
     */
    public function getHouseId()
    {
        return $this->house_id;
    }

    /**
     * @param mixed $house_id
     */
    public function setHouseId($house_id)
    {
        $this->house_id = $house_id;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

}