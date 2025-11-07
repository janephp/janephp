<?php

namespace Jane\Generated\DigitalOcean\Model;

class ConnectionPools extends \ArrayObject
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
     * An array of connection pool objects.
     *
     * @var list<ConnectionPool>
     */
    protected $pools;
    /**
     * An array of connection pool objects.
     *
     * @return list<ConnectionPool>
     */
    public function getPools(): array
    {
        return $this->pools;
    }
    /**
     * An array of connection pool objects.
     *
     * @param list<ConnectionPool> $pools
     *
     * @return self
     */
    public function setPools(array $pools): self
    {
        $this->initialized['pools'] = true;
        $this->pools = $pools;
        return $this;
    }
}