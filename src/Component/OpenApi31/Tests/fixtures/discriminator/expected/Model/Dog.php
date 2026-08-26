<?php

namespace Jane\Component\OpenApi31\Tests\DiscriminatorExpected\Model;

class Dog extends Pet
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getPackSize(): int
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
    public function setPackSize(int $packSize): self
    {
        $this->initialized['packSize'] = true;
        $this->packSize = $packSize;
        return $this;
    }
    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['packSize' => ['packSize', 'getPackSize', 'setPackSize']]);
    }
}