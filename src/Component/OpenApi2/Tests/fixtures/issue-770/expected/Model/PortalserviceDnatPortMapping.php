<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceDnatPortMapping
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
     * Source port
     *
     * @var int
     */
    protected $sourcePort;
    /**
     * Destination port
     *
     * @var int
     */
    protected $destPort;
    /**
     * Source port
     *
     * @return int
     */
    public function getSourcePort(): int
    {
        return $this->sourcePort;
    }
    /**
     * Source port
     *
     * @param int $sourcePort
     *
     * @return self
     */
    public function setSourcePort(int $sourcePort): self
    {
        $this->initialized['sourcePort'] = true;
        $this->sourcePort = $sourcePort;
        return $this;
    }
    /**
     * Destination port
     *
     * @return int
     */
    public function getDestPort(): int
    {
        return $this->destPort;
    }
    /**
     * Destination port
     *
     * @param int $destPort
     *
     * @return self
     */
    public function setDestPort(int $destPort): self
    {
        $this->initialized['destPort'] = true;
        $this->destPort = $destPort;
        return $this;
    }
}