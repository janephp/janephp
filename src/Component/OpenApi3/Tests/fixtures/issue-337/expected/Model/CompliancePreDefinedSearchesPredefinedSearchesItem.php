<?php

namespace CreditSafe\API\Model;

class CompliancePreDefinedSearchesPredefinedSearchesItem
{
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
        $this->confidence = $confidence;
        return $this;
    }
}