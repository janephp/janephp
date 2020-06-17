<?php

namespace CreditSafe\API\Model;

class ListCompanyImagesDataItemDocument
{
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
        $this->description = $description;
        return $this;
    }
}