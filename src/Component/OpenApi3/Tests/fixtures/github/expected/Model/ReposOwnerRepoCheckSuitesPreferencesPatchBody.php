<?php

namespace Github\Model;

class ReposOwnerRepoCheckSuitesPreferencesPatchBody extends \ArrayObject
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
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://developer.github.com/v3/checks/suites/#auto_trigger_checks-object) description for details.
     *
     * @var list<ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem>
     */
    protected $autoTriggerChecks;
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://developer.github.com/v3/checks/suites/#auto_trigger_checks-object) description for details.
     *
     * @return list<ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem>
     */
    public function getAutoTriggerChecks() : array
    {
        return $this->autoTriggerChecks;
    }
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://developer.github.com/v3/checks/suites/#auto_trigger_checks-object) description for details.
     *
     * @param list<ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem> $autoTriggerChecks
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