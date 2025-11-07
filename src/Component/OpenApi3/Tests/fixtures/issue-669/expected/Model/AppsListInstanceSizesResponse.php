<?php

namespace Jane\Generated\DigitalOcean\Model;

class AppsListInstanceSizesResponse extends \ArrayObject
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
     * @var float
     */
    protected $discountPercent;
    /**
     * @var list<AppsInstanceSize>
     */
    protected $instanceSizes;
    /**
     * @return float
     */
    public function getDiscountPercent(): float
    {
        return $this->discountPercent;
    }
    /**
     * @param float $discountPercent
     *
     * @return self
     */
    public function setDiscountPercent(float $discountPercent): self
    {
        $this->initialized['discountPercent'] = true;
        $this->discountPercent = $discountPercent;
        return $this;
    }
    /**
     * @return list<AppsInstanceSize>
     */
    public function getInstanceSizes(): array
    {
        return $this->instanceSizes;
    }
    /**
     * @param list<AppsInstanceSize> $instanceSizes
     *
     * @return self
     */
    public function setInstanceSizes(array $instanceSizes): self
    {
        $this->initialized['instanceSizes'] = true;
        $this->instanceSizes = $instanceSizes;
        return $this;
    }
}