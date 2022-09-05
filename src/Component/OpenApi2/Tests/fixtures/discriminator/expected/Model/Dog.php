<?php

namespace Jane\Component\OpenApi2\Tests\Expected\Model;

class Dog extends Pet
{
    /**
     * the size of the pack the dog is from
     *
     * @var int
     */
    protected $packSize = 0;
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