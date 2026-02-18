<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseMultiregistryInfo extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $registry;
    /**
     * @return array<string, mixed>
     */
    public function getRegistry(): iterable
    {
        return $this->registry;
    }
    /**
     * @param array<string, mixed> $registry
     *
     * @return self
     */
    public function setRegistry(iterable $registry): self
    {
        $this->initialized['registry'] = true;
        $this->registry = $registry;
        return $this;
    }
}