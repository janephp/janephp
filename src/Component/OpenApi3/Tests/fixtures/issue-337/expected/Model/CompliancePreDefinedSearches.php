<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompliancePreDefinedSearches implements AdditionalPropertiesInterface
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
    protected $totalSize;
    /**
     * @var list<CompliancePreDefinedSearchesPredefinedSearchesItem>
     */
    protected $predefinedSearches;
    /**
     * @return int
     */
    public function getTotalSize(): int
    {
        return $this->totalSize;
    }
    /**
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize): self
    {
        $this->initialized['totalSize'] = true;
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * @return list<CompliancePreDefinedSearchesPredefinedSearchesItem>
     */
    public function getPredefinedSearches(): array
    {
        return $this->predefinedSearches;
    }
    /**
     * @param list<CompliancePreDefinedSearchesPredefinedSearchesItem> $predefinedSearches
     *
     * @return self
     */
    public function setPredefinedSearches(array $predefinedSearches): self
    {
        $this->initialized['predefinedSearches'] = true;
        $this->predefinedSearches = $predefinedSearches;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['totalSize' => ['totalSize', 'getTotalSize', 'setTotalSize'], 'predefinedSearches' => ['predefinedSearches', 'getPredefinedSearches', 'setPredefinedSearches']];
    }
}