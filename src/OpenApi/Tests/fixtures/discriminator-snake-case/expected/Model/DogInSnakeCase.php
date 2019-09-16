<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class DogInSnakeCase extends Pet
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
    public function getPetType() : string
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
    public function setPetType(string $petType) : self
    {
        $this->petType = $petType;
        return $this;
    }
    /**
     * the size of the pack the dog is from
     *
     * @return int
     */
    public function getPackSize() : int
    {
        return $this->packSize;
    }
    /**
     * the size of the pack the dog is from
     *
     * @param int $packSize
     *
     * @return self
     */
    public function setPackSize(int $packSize) : self
    {
        $this->packSize = $packSize;
        return $this;
    }
}