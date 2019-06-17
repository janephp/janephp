<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Pet
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
        $this->petType = $petType;
    }
}