<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseConnectionPool extends \ArrayObject
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
}