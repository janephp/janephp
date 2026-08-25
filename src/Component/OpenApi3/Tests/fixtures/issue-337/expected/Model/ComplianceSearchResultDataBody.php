<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBody implements AdditionalPropertiesInterface
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
     * @var ComplianceSearchResultDataBodySearchResult
     */
    protected $searchResult;
    /**
     * @return ComplianceSearchResultDataBodySearchResult
     */
    public function getSearchResult(): ComplianceSearchResultDataBodySearchResult
    {
        return $this->searchResult;
    }
    /**
     * @param ComplianceSearchResultDataBodySearchResult $searchResult
     *
     * @return self
     */
    public function setSearchResult(ComplianceSearchResultDataBodySearchResult $searchResult): self
    {
        $this->initialized['searchResult'] = true;
        $this->searchResult = $searchResult;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['searchResult' => ['searchResult', 'getSearchResult', 'setSearchResult']];
    }
}