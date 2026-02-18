<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileRateLimitPorts
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
     * Rate limit ports Id
     *
     * @var string
     */
    protected $ports;
    /**
     * Rate limit kbps
     *
     * @var int
     */
    protected $limit;
    /**
     * Rate limit ports Id
     *
     * @return string
     */
    public function getPorts(): string
    {
        return $this->ports;
    }
    /**
     * Rate limit ports Id
     *
     * @param string $ports
     *
     * @return self
     */
    public function setPorts(string $ports): self
    {
        $this->initialized['ports'] = true;
        $this->ports = $ports;
        return $this;
    }
    /**
     * Rate limit kbps
     *
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
    /**
     * Rate limit kbps
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit): self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
        return $this;
    }
}