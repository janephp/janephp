<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonApLatencyInterval
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
     * AP ping latency enabled
     *
     * @var bool
     */
    protected $pingEnabled = true;
    /**
     * AP ping latency enabled
     *
     * @return bool
     */
    public function getPingEnabled(): bool
    {
        return $this->pingEnabled;
    }
    /**
     * AP ping latency enabled
     *
     * @param bool $pingEnabled
     *
     * @return self
     */
    public function setPingEnabled(bool $pingEnabled): self
    {
        $this->initialized['pingEnabled'] = true;
        $this->pingEnabled = $pingEnabled;
        return $this;
    }
}