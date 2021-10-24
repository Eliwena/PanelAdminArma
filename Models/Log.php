<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Log extends Database
{
    protected $logid;
    protected $date_time;
    protected $user;
    protected $action;
    protected $level;

    public function __construct(){
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getLogid()
    {
        return $this->logid;
    }

    /**
     * @param mixed $logid
     */
    public function setLogid($logid)
    {
        $this->logid = $logid;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->date_time;
    }

    /**
     * @param mixed $date_time
     */
    public function setDateTime($date_time)
    {
        $this->date_time = $date_time;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

}