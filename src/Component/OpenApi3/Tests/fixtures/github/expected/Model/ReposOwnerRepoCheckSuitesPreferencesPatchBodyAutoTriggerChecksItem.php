<?php

namespace Github\Model;

class ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The `id` of the GitHub App.
     *
     * @var int
     */
    protected $appId;
    /**
     * Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
     *
     * @var bool
     */
    protected $setting = true;
    /**
     * The `id` of the GitHub App.
     *
     * @return int
     */
    public function getAppId() : int
    {
        return $this->appId;
    }
    /**
     * The `id` of the GitHub App.
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
     * Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
     *
     * @return bool
     */
    public function getSetting() : bool
    {
        return $this->setting;
    }
    /**
     * Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
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