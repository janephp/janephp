<?php

namespace Github\Model;

class CheckSuitePreferencePreferences extends \ArrayObject
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
     * @var CheckSuitePreferencePreferencesAutoTriggerChecksItem[]
     */
    protected $autoTriggerChecks;
    /**
     * 
     *
     * @return CheckSuitePreferencePreferencesAutoTriggerChecksItem[]
     */
    public function getAutoTriggerChecks() : array
    {
        return $this->autoTriggerChecks;
    }
    /**
     * 
     *
     * @param CheckSuitePreferencePreferencesAutoTriggerChecksItem[] $autoTriggerChecks
     *
     * @return self
     */
    public function setAutoTriggerChecks(array $autoTriggerChecks) : self
    {
        $this->initialized['autoTriggerChecks'] = true;
        $this->autoTriggerChecks = $autoTriggerChecks;
        return $this;
    }
}