<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName
     */
    public function getName() : ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName $name
     *
     * @return self
     */
    public function setName(ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItemName $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}