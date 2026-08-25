<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class ReposOwnerRepoActionsArtifactsGetResponse200 implements AdditionalPropertiesInterface
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
     * @var list<Artifact>
     */
    protected $artifacts;
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
     * @return list<Artifact>
     */
    public function getArtifacts(): array
    {
        return $this->artifacts;
    }
    /**
     * @param list<Artifact> $artifacts
     *
     * @return self
     */
    public function setArtifacts(array $artifacts): self
    {
        $this->initialized['artifacts'] = true;
        $this->artifacts = $artifacts;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalCount' => ['total_count', 'getTotalCount', 'setTotalCount'], 'artifacts' => ['artifacts', 'getArtifacts', 'setArtifacts']];
    }
}