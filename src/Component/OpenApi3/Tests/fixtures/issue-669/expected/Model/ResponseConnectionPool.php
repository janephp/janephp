<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseConnectionPool implements AdditionalPropertiesInterface
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
     * @var ConnectionPool
     */
    protected $pool;
    /**
     * @return ConnectionPool
     */
    public function getPool(): ConnectionPool
    {
        return $this->pool;
    }
    /**
     * @param ConnectionPool $pool
     *
     * @return self
     */
    public function setPool(ConnectionPool $pool): self
    {
        $this->initialized['pool'] = true;
        $this->pool = $pool;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['pool' => ['pool', 'getPool', 'setPool']];
    }
}