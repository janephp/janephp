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
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     */
    public function setName(?string $name)
    {
        $this->name = $name;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPetType() : ?string
    {
        return $this->petType;
    }
    /**
     * 
     *
     * @param string|null $petType
     */
    public function setPetType(?string $petType)
    {
        $this->petType = $petType;
    }
}