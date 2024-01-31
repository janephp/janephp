<?php

namespace CreditSafe\API\Model;

class ListCompanyImagesDataItemDocument extends \ArrayObject
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
    protected $imageType;
    /**
     * 
     *
     * @var string
     */
    protected $imageCode;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @return string
     */
    public function getImageType() : string
    {
        return $this->imageType;
    }
    /**
     * 
     *
     * @param string $imageType
     *
     * @return self
     */
    public function setImageType(string $imageType) : self
    {
        $this->initialized['imageType'] = true;
        $this->imageType = $imageType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImageCode() : string
    {
        return $this->imageCode;
    }
    /**
     * 
     *
     * @param string $imageCode
     *
     * @return self
     */
    public function setImageCode(string $imageCode) : self
    {
        $this->initialized['imageCode'] = true;
        $this->imageCode = $imageCode;
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
}