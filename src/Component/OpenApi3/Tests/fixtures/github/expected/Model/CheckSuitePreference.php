<?php

namespace Github\Model;

class CheckSuitePreference extends \ArrayObject
{
    /**
     * 
     *
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
     * 
     *
     * @return CheckSuitePreferencePreferences
     */
    public function getPreferences() : CheckSuitePreferencePreferences
    {
        return $this->preferences;
    }
    /**
     * 
     *
     * @param CheckSuitePreferencePreferences $preferences
     *
     * @return self
     */
    public function setPreferences(CheckSuitePreferencePreferences $preferences) : self
    {
        $this->preferences = $preferences;
        return $this;
    }
    /**
     * A git repository
     *
     * @return Repository
     */
    public function getRepository() : Repository
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
    public function setRepository(Repository $repository) : self
    {
        $this->repository = $repository;
        return $this;
    }
}