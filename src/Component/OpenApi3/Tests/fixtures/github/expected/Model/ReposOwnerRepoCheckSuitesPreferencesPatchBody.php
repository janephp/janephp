<?php

namespace Github\Model;

class ReposOwnerRepoCheckSuitesPreferencesPatchBody
{
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://developer.github.com/v3/checks/suites/#auto_trigger_checks-object) description for details.
     *
     * @var ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem[]
     */
    protected $autoTriggerChecks;
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://developer.github.com/v3/checks/suites/#auto_trigger_checks-object) description for details.
     *
     * @return ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem[]
     */
    public function getAutoTriggerChecks() : array
    {
        return $this->autoTriggerChecks;
    }
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default. See the [`auto_trigger_checks` object](https://developer.github.com/v3/checks/suites/#auto_trigger_checks-object) description for details.
     *
     * @param ReposOwnerRepoCheckSuitesPreferencesPatchBodyAutoTriggerChecksItem[] $autoTriggerChecks
     *
     * @return self
     */
    public function setAutoTriggerChecks(array $autoTriggerChecks) : self
    {
        $this->autoTriggerChecks = $autoTriggerChecks;
        return $this;
    }
}