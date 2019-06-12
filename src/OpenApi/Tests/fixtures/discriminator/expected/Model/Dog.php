<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class Dog extends Pet
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
     * the size of the pack the dog is from
     *
     * @var int
     */
    protected $packSize = 0;
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
     *
     * @return self
     */
    public function setPetType(?string $petType) : self
    {
        $this->petType = $petType;
        return $this;
    }
    /**
     * the size of the pack the dog is from
     *
     * @return int|null
     */
    public function getPackSize() : ?int
    {
        return $this->packSize;
    }
    /**
     * the size of the pack the dog is from
     *
     * @param int|null $packSize
     *
     * @return self
     */
    public function setPackSize(?int $packSize) : self
    {
        $this->packSize = $packSize;
        return $this;
    }
}