<?php

namespace Jane\Generated\DigitalOcean\Model;

class SqlMode extends \ArrayObject
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
     * A string specifying the configured SQL modes for the MySQL cluster.
     *
     * @var string
     */
    protected $sqlMode;
    /**
     * A string specifying the configured SQL modes for the MySQL cluster.
     *
     * @return string
     */
    public function getSqlMode(): string
    {
        return $this->sqlMode;
    }
    /**
     * A string specifying the configured SQL modes for the MySQL cluster.
     *
     * @param string $sqlMode
     *
     * @return self
     */
    public function setSqlMode(string $sqlMode): self
    {
        $this->initialized['sqlMode'] = true;
        $this->sqlMode = $sqlMode;
        return $this;
    }
}