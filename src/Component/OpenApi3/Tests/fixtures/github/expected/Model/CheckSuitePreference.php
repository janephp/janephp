<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class CheckSuitePreference implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var CheckSuitePreferencePreferences
     */
    protected $preferences;
    /**
     * A git repository
     *
     * @var Repository
     */
    protected $repository;
    /**
     * @return CheckSuitePreferencePreferences
     */
    public function getPreferences(): CheckSuitePreferencePreferences
    {
        return $this->preferences;
    }
    /**
     * @param CheckSuitePreferencePreferences $preferences
     *
     * @return self
     */
    public function setPreferences(CheckSuitePreferencePreferences $preferences): self
    {
        $this->initialized['preferences'] = true;
        $this->preferences = $preferences;
        return $this;
    }
    /**
     * A git repository
     *
     * @return Repository
     */
    public function getRepository(): Repository
    {
        return $this->repository;
    }
    /**
     * A git repository
     *
     * @param Repository $repository
     *
     * @return self
     */
    public function setRepository(Repository $repository): self
    {
        $this->initialized['repository'] = true;
        $this->repository = $repository;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['preferences' => ['preferences', 'getPreferences', 'setPreferences'], 'repository' => ['repository', 'getRepository', 'setRepository']];
    }
}