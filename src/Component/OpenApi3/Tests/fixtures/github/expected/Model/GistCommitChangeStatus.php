<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class GistCommitChangeStatus implements AdditionalPropertiesInterface
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
    protected $total;
    /**
     * @var int
     */
    protected $additions;
    /**
     * @var int
     */
    protected $deletions;
    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * @return int
     */
    public function getAdditions(): int
    {
        return $this->additions;
    }
    /**
     * @param int $additions
     *
     * @return self
     */
    public function setAdditions(int $additions): self
    {
        $this->initialized['additions'] = true;
        $this->additions = $additions;
        return $this;
    }
    /**
     * @return int
     */
    public function getDeletions(): int
    {
        return $this->deletions;
    }
    /**
     * @param int $deletions
     *
     * @return self
     */
    public function setDeletions(int $deletions): self
    {
        $this->initialized['deletions'] = true;
        $this->deletions = $deletions;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['total' => ['total', 'getTotal', 'setTotal'], 'additions' => ['additions', 'getAdditions', 'setAdditions'], 'deletions' => ['deletions', 'getDeletions', 'setDeletions']];
    }
}