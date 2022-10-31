<?php

namespace Github\Model;

class CheckSuitePreferencePreferencesAutoTriggerChecksItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $appId;
    /**
     * 
     *
     * @var bool
     */
    protected $setting;
    /**
     * 
     *
     * @return int
     */
    public function getAppId() : int
    {
        return $this->appId;
    }
    /**
     * 
     *
     * @param int $appId
     *
     * @return self
     */
    public function setAppId(int $appId) : self
    {
        $this->initialized['appId'] = true;
        $this->appId = $appId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSetting() : bool
    {
        return $this->setting;
    }
    /**
     * 
     *
     * @param bool $setting
     *
     * @return self
     */
    public function setSetting(bool $setting) : self
    {
        $this->initialized['setting'] = true;
        $this->setting = $setting;
        return $this;
    }
}