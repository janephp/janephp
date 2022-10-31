<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Pet
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
    protected $petType;
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
     */
    public function setName(string $name)
    {
        $this->initialized['name'] = true;
        $this->name = $name;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPetType() : string
    {
        return $this->petType;
    }
    /**
     * 
     *
     * @param string $petType
     */
    public function setPetType(string $petType)
    {
        $this->initialized['petType'] = true;
        $this->petType = $petType;
    }
}