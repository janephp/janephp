<?php

namespace Github\Model;

class CheckSuitePreferencePreferences
{
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
        $this->autoTriggerChecks = $autoTriggerChecks;
        return $this;
    }
}