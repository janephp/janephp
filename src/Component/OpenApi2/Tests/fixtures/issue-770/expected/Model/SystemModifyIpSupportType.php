<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemModifyIpSupportType
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
     * IP support version
     *
     * @var string
     */
    protected $ipMode;
    /**
     * IP support version
     *
     * @return string
     */
    public function getIpMode(): string
    {
        return $this->ipMode;
    }
    /**
     * IP support version
     *
     * @param string $ipMode
     *
     * @return self
     */
    public function setIpMode(string $ipMode): self
    {
        $this->initialized['ipMode'] = true;
        $this->ipMode = $ipMode;
        return $this;
    }
}