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
    public function getName() : ?string
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
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPetType() : ?string
    {
        return $this->petType;
    }
    /**
     * 
     *
     * @param string $petType
     *
     * @return self
     */
    public function setPetType(?string $petType) : self
    {
        $this->petType = $petType;
        return $this;
    }
}