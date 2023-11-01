<?php

namespace CreditSafe\API\Model;

class CompliancePreDefinedSearchesPredefinedSearchesItem extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $categoryName;
    /**
     * 
     *
     * @var string
     */
    protected $productName;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var int
     */
    protected $confidence;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
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
    public function getCategoryName() : string
    {
        return $this->categoryName;
    }
    /**
     * 
     *
     * @param string $categoryName
     *
     * @return self
     */
    public function setCategoryName(string $categoryName) : self
    {
        $this->initialized['categoryName'] = true;
        $this->categoryName = $categoryName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductName() : string
    {
        return $this->productName;
    }
    /**
     * 
     *
     * @param string $productName
     *
     * @return self
     */
    public function setProductName(string $productName) : self
    {
        $this->initialized['productName'] = true;
        $this->productName = $productName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getConfidence() : int
    {
        return $this->confidence;
    }
    /**
     * 
     *
     * @param int $confidence
     *
     * @return self
     */
    public function setConfidence(int $confidence) : self
    {
        $this->initialized['confidence'] = true;
        $this->confidence = $confidence;
        return $this;
    }
}