<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Cw_users extends Database
{
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $primaryGroup;
    protected $connect_id;
    protected $secondaryGroups;
    protected $profilePicture;
    protected $profileUrl;
    protected $pid;
    protected $password_reset_token;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPrimaryGroup()
    {
        return $this->primaryGroup;
    }

    /**
     * @param mixed $primaryGroup
     */
    public function setPrimaryGroup($primaryGroup)
    {
        $this->primaryGroup = $primaryGroup;
    }

    /**
     * @return mixed
     */
    public function getConnectId()
    {
        return $this->connect_id;
    }

    /**
     * @param mixed $connect_id
     */
    public function setConnectId($connect_id)
    {
        $this->connect_id = $connect_id;
    }

    /**
     * @return mixed
     */
    public function getSecondaryGroups()
    {
        return $this->secondaryGroups;
    }

    /**
     * @param mixed $secondaryGroups
     */
    public function setSecondaryGroups($secondaryGroups)
    {
        $this->secondaryGroups = $secondaryGroups;
    }

    /**
     * @return mixed
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * @param mixed $profilePicture
     */
    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }

    /**
     * @return mixed
     */
    public function getProfileUrl()
    {
        return $this->profileUrl;
    }

    /**
     * @param mixed $profileUrl
     */
    public function setProfileUrl($profileUrl)
    {
        $this->profileUrl = $profileUrl;
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
    public function getPasswordResetToken()
    {
        return $this->password_reset_token;
    }

    /**
     * @param mixed $password_reset_token
     */
    public function setPasswordResetToken($password_reset_token)
    {
        $this->password_reset_token = $password_reset_token;
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