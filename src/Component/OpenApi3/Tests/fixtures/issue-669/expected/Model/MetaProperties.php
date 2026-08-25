<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetaProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Number of objects returned by the request.
     *
     * @var int
     */
    protected $total;
    /**
     * Number of objects returned by the request.
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Number of objects returned by the request.
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['total' => ['total', 'getTotal', 'setTotal']];
    }
}