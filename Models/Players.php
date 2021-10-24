<?php


namespace App\Models;

use App\Core\Database;
use App\Core\Helpers;

class Players extends Database
{
    protected $uid;
    protected $pid;
    protected $name;
    protected $aliases;
    protected $cash;
    protected $bankacc;
    protected $coplevel;
    protected $mediclevel;
    protected $civ_licenses;
    protected $cop_licenses;
    protected $med_licenses;
    protected $civ_gear;
    protected $cop_gear;
    protected $med_gear;
    protected $civ_stats;
    protected $cop_stats;
    protected $med_stats;
    protected $arrested;
    protected $adminlevel;
    protected $donorlevel;
    protected $blacklist;
    protected $civ_alive;
    protected $playtime;
    protected $insert_time;
    protected $last_seen;
    protected $phone_number;
    protected $contact_list;
    protected $sms_value;
    protected $call_value;
    protected $points_data;
    protected $EXP;
    protected $exp_level;
    protected $exp_total;
    protected $exp_perkPoints;
    protected $exp_perks;
    protected $IsCop;
    protected $IsEMT;
    protected $IsAdac;
    protected $credit;
    protected $sponsor;

    public function __construct(){
        parent::__construct();
    }


    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
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
    public function getAliases()
    {
        return $this->aliases;
    }

    /**
     * @param mixed $aliases
     */
    public function setAliases($aliases)
    {
        $this->aliases = $aliases;
    }

    /**
     * @return mixed
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * @param mixed $cash
     */
    public function setCash($cash)
    {
        $this->cash = $cash;
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
    public function getCoplevel()
    {
        return $this->coplevel;
    }

    /**
     * @param mixed $coplevel
     */
    public function setCoplevel($coplevel)
    {
        $this->coplevel = $coplevel;
    }

    /**
     * @return mixed
     */
    public function getMediclevel()
    {
        return $this->mediclevel;
    }

    /**
     * @param mixed $mediclevel
     */
    public function setMediclevel($mediclevel)
    {
        $this->mediclevel = $mediclevel;
    }

    /**
     * @return mixed
     */
    public function getCivLicenses()
    {
        return $this->civ_licenses;
    }

    /**
     * @param mixed $civ_licenses
     */
    public function setCivLicenses($civ_licenses)
    {
        $this->civ_licenses = $civ_licenses;
    }

    /**
     * @return mixed
     */
    public function getCopLicenses()
    {
        return $this->cop_licenses;
    }

    /**
     * @param mixed $cop_licenses
     */
    public function setCopLicenses($cop_licenses)
    {
        $this->cop_licenses = $cop_licenses;
    }

    /**
     * @return mixed
     */
    public function getMedLicenses()
    {
        return $this->med_licenses;
    }

    /**
     * @param mixed $med_licenses
     */
    public function setMedLicenses($med_licenses)
    {
        $this->med_licenses = $med_licenses;
    }

    /**
     * @return mixed
     */
    public function getCivGear()
    {
        return $this->civ_gear;
    }

    /**
     * @param mixed $civ_gear
     */
    public function setCivGear($civ_gear)
    {
        $this->civ_gear = $civ_gear;
    }

    /**
     * @return mixed
     */
    public function getCopGear()
    {
        return $this->cop_gear;
    }

    /**
     * @param mixed $cop_gear
     */
    public function setCopGear($cop_gear)
    {
        $this->cop_gear = $cop_gear;
    }

    /**
     * @return mixed
     */
    public function getMedGear()
    {
        return $this->med_gear;
    }

    /**
     * @param mixed $med_gear
     */
    public function setMedGear($med_gear)
    {
        $this->med_gear = $med_gear;
    }

    /**
     * @return mixed
     */
    public function getCivStats()
    {
        return $this->civ_stats;
    }

    /**
     * @param mixed $civ_stats
     */
    public function setCivStats($civ_stats)
    {
        $this->civ_stats = $civ_stats;
    }

    /**
     * @return mixed
     */
    public function getCopStats()
    {
        return $this->cop_stats;
    }

    /**
     * @param mixed $cop_stats
     */
    public function setCopStats($cop_stats)
    {
        $this->cop_stats = $cop_stats;
    }

    /**
     * @return mixed
     */
    public function getMedStats()
    {
        return $this->med_stats;
    }

    /**
     * @param mixed $med_stats
     */
    public function setMedStats($med_stats)
    {
        $this->med_stats = $med_stats;
    }

    /**
     * @return mixed
     */
    public function getArrested()
    {
        return $this->arrested;
    }

    /**
     * @param mixed $arrested
     */
    public function setArrested($arrested)
    {
        $this->arrested = $arrested;
    }

    /**
     * @return mixed
     */
    public function getAdminlevel()
    {
        return $this->adminlevel;
    }

    /**
     * @param mixed $adminlevel
     */
    public function setAdminlevel($adminlevel)
    {
        $this->adminlevel = $adminlevel;
    }

    /**
     * @return mixed
     */
    public function getDonorlevel()
    {
        return $this->donorlevel;
    }

    /**
     * @param mixed $donorlevel
     */
    public function setDonorlevel($donorlevel)
    {
        $this->donorlevel = $donorlevel;
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
    public function getCivAlive()
    {
        return $this->civ_alive;
    }

    /**
     * @param mixed $civ_alive
     */
    public function setCivAlive($civ_alive)
    {
        $this->civ_alive = $civ_alive;
    }

    /**
     * @return mixed
     */
    public function getPlaytime()
    {
        return $this->playtime;
    }

    /**
     * @param mixed $playtime
     */
    public function setPlaytime($playtime)
    {
        $this->playtime = $playtime;
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
    public function getLastSeen()
    {
        return $this->last_seen;
    }

    /**
     * @param mixed $last_seen
     */
    public function setLastSeen($last_seen)
    {
        $this->last_seen = $last_seen;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param mixed $phone_number
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;
    }

    /**
     * @return mixed
     */
    public function getContactList()
    {
        return $this->contact_list;
    }

    /**
     * @param mixed $contact_list
     */
    public function setContactList($contact_list)
    {
        $this->contact_list = $contact_list;
    }

    /**
     * @return mixed
     */
    public function getSmsValue()
    {
        return $this->sms_value;
    }

    /**
     * @param mixed $sms_value
     */
    public function setSmsValue($sms_value)
    {
        $this->sms_value = $sms_value;
    }

    /**
     * @return mixed
     */
    public function getCallValue()
    {
        return $this->call_value;
    }

    /**
     * @param mixed $call_value
     */
    public function setCallValue($call_value)
    {
        $this->call_value = $call_value;
    }

    /**
     * @return mixed
     */
    public function getPointsData()
    {
        return $this->points_data;
    }

    /**
     * @param mixed $points_data
     */
    public function setPointsData($points_data)
    {
        $this->points_data = $points_data;
    }

    /**
     * @return mixed
     */
    public function getEXP()
    {
        return $this->EXP;
    }

    /**
     * @param mixed $EXP
     */
    public function setEXP($EXP)
    {
        $this->EXP = $EXP;
    }

    /**
     * @return mixed
     */
    public function getExpLevel()
    {
        return $this->exp_level;
    }

    /**
     * @param mixed $exp_level
     */
    public function setExpLevel($exp_level)
    {
        $this->exp_level = $exp_level;
    }

    /**
     * @return mixed
     */
    public function getExpTotal()
    {
        return $this->exp_total;
    }

    /**
     * @param mixed $exp_total
     */
    public function setExpTotal($exp_total)
    {
        $this->exp_total = $exp_total;
    }

    /**
     * @return mixed
     */
    public function getExpPerkPoints()
    {
        return $this->exp_perkPoints;
    }

    /**
     * @param mixed $exp_perkPoints
     */
    public function setExpPerkPoints($exp_perkPoints)
    {
        $this->exp_perkPoints = $exp_perkPoints;
    }

    /**
     * @return mixed
     */
    public function getExpPerks()
    {
        return $this->exp_perks;
    }

    /**
     * @param mixed $exp_perks
     */
    public function setExpPerks($exp_perks)
    {
        $this->exp_perks = $exp_perks;
    }

    /**
     * @return mixed
     */
    public function getIsCop()
    {
        return $this->IsCop;
    }

    /**
     * @param mixed $IsCop
     */
    public function setIsCop($IsCop)
    {
        $this->IsCop = $IsCop;
    }

    /**
     * @return mixed
     */
    public function getIsEMT()
    {
        return $this->IsEMT;
    }

    /**
     * @param mixed $IsEMT
     */
    public function setIsEMT($IsEMT)
    {
        $this->IsEMT = $IsEMT;
    }

    /**
     * @return mixed
     */
    public function getIsAdac()
    {
        return $this->IsAdac;
    }

    /**
     * @param mixed $IsAdac
     */
    public function setIsAdac($IsAdac)
    {
        $this->IsAdac = $IsAdac;
    }

    /**
     * @return mixed
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @param mixed $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return mixed
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * @param mixed $sponsor
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
    }



}