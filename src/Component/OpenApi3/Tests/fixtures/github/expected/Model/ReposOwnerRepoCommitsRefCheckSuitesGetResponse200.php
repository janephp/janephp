<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoCommitsRefCheckSuitesGetResponse200 implements AdditionalPropertiesInterface
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
     * @var int
     */
    protected $totalCount;
    /**
     * @var list<CheckSuite>
     */
    protected $checkSuites;
    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * @return list<CheckSuite>
     */
    public function getCheckSuites(): array
    {
        return $this->checkSuites;
    }
    /**
     * @param list<CheckSuite> $checkSuites
     *
     * @return self
     */
    public function setCheckSuites(array $checkSuites): self
    {
        $this->initialized['checkSuites'] = true;
        $this->checkSuites = $checkSuites;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalCount' => ['total_count', 'getTotalCount', 'setTotalCount'], 'checkSuites' => ['check_suites', 'getCheckSuites', 'setCheckSuites']];
    }
}