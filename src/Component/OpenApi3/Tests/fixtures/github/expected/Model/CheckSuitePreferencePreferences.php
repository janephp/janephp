<?php

namespace Github\Model;

class CheckSuitePreferencePreferences extends \ArrayObject
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
     * 
     *
     * @var list<CheckSuitePreferencePreferencesAutoTriggerChecksItem>
     */
    protected $autoTriggerChecks;
    /**
     * 
     *
     * @return list<CheckSuitePreferencePreferencesAutoTriggerChecksItem>
     */
    public function getAutoTriggerChecks() : array
    {
        return $this->autoTriggerChecks;
    }
    /**
     * 
     *
     * @param list<CheckSuitePreferencePreferencesAutoTriggerChecksItem> $autoTriggerChecks
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