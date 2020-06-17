<?php

namespace CreditSafe\API\Model;

class CompliancePreDefinedSearches
{
    /**
     * 
     *
     * @var int
     */
    protected $totalSize;
    /**
     * 
     *
     * @var CompliancePreDefinedSearchesPredefinedSearchesItem[]
     */
    protected $predefinedSearches;
    /**
     * 
     *
     * @return int
     */
    public function getTotalSize() : int
    {
        return $this->totalSize;
    }
    /**
     * 
     *
     * @param int $totalSize
     *
     * @return self
     */
    public function setTotalSize(int $totalSize) : self
    {
        $this->totalSize = $totalSize;
        return $this;
    }
    /**
     * 
     *
     * @return CompliancePreDefinedSearchesPredefinedSearchesItem[]
     */
    public function getPredefinedSearches() : array
    {
        return $this->predefinedSearches;
    }
    /**
     * 
     *
     * @param CompliancePreDefinedSearchesPredefinedSearchesItem[] $predefinedSearches
     *
     * @return self
     */
    public function setPredefinedSearches(array $predefinedSearches) : self
    {
        $this->predefinedSearches = $predefinedSearches;
        return $this;
    }
}