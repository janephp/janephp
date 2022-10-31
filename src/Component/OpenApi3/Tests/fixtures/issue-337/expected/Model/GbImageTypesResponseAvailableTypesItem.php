<?php

namespace CreditSafe\API\Model;

class GbImageTypesResponseAvailableTypesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
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
    protected $imageType;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string[]
     */
    protected $availableFormats;
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
     * @return string[]
     */
    public function getAvailableFormats() : array
    {
        return $this->availableFormats;
    }
    /**
     * 
     *
     * @param string[] $availableFormats
     *
     * @return self
     */
    public function setAvailableFormats(array $availableFormats) : self
    {
        $this->initialized['availableFormats'] = true;
        $this->availableFormats = $availableFormats;
        return $this;
    }
}