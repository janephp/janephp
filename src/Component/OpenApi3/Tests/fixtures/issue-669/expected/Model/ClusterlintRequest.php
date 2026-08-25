<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ClusterlintRequest implements AdditionalPropertiesInterface
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
     * An array of check groups that will be run when clusterlint executes checks.
     *
     * @var list<string>
     */
    protected $includeGroups;
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @var list<string>
     */
    protected $includeChecks;
    /**
     * An array of check groups that will be omitted when clusterlint executes checks.
     *
     * @var list<string>
     */
    protected $excludeGroups;
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @var list<string>
     */
    protected $excludeChecks;
    /**
     * An array of check groups that will be run when clusterlint executes checks.
     *
     * @return list<string>
     */
    public function getIncludeGroups(): array
    {
        return $this->includeGroups;
    }
    /**
     * An array of check groups that will be run when clusterlint executes checks.
     *
     * @param list<string> $includeGroups
     *
     * @return self
     */
    public function setIncludeGroups(array $includeGroups): self
    {
        $this->initialized['includeGroups'] = true;
        $this->includeGroups = $includeGroups;
        return $this;
    }
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @return list<string>
     */
    public function getIncludeChecks(): array
    {
        return $this->includeChecks;
    }
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @param list<string> $includeChecks
     *
     * @return self
     */
    public function setIncludeChecks(array $includeChecks): self
    {
        $this->initialized['includeChecks'] = true;
        $this->includeChecks = $includeChecks;
        return $this;
    }
    /**
     * An array of check groups that will be omitted when clusterlint executes checks.
     *
     * @return list<string>
     */
    public function getExcludeGroups(): array
    {
        return $this->excludeGroups;
    }
    /**
     * An array of check groups that will be omitted when clusterlint executes checks.
     *
     * @param list<string> $excludeGroups
     *
     * @return self
     */
    public function setExcludeGroups(array $excludeGroups): self
    {
        $this->initialized['excludeGroups'] = true;
        $this->excludeGroups = $excludeGroups;
        return $this;
    }
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @return list<string>
     */
    public function getExcludeChecks(): array
    {
        return $this->excludeChecks;
    }
    /**
     * An array of checks that will be run when clusterlint executes checks.
     *
     * @param list<string> $excludeChecks
     *
     * @return self
     */
    public function setExcludeChecks(array $excludeChecks): self
    {
        $this->initialized['excludeChecks'] = true;
        $this->excludeChecks = $excludeChecks;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['includeGroups' => ['include_groups', 'getIncludeGroups', 'setIncludeGroups'], 'includeChecks' => ['include_checks', 'getIncludeChecks', 'setIncludeChecks'], 'excludeGroups' => ['exclude_groups', 'getExcludeGroups', 'setExcludeGroups'], 'excludeChecks' => ['exclude_checks', 'getExcludeChecks', 'setExcludeChecks']];
    }
}