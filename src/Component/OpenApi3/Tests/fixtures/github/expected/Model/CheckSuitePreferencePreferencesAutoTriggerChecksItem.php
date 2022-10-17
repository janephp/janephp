<?php

namespace Github\Model;

class CheckSuitePreferencePreferencesAutoTriggerChecksItem extends \ArrayObject
{
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
        $this->setting = $setting;
        return $this;
    }
}