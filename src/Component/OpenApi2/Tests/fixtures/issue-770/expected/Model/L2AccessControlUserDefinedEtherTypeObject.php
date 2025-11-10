<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class L2AccessControlUserDefinedEtherTypeObject
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
     * @var string
     */
    protected $etherType;
    /**
     * @var string
     */
    protected $protocolName;
    /**
     * @return string
     */
    public function getEtherType(): string
    {
        return $this->etherType;
    }
    /**
     * @param string $etherType
     *
     * @return self
     */
    public function setEtherType(string $etherType): self
    {
        $this->initialized['etherType'] = true;
        $this->etherType = $etherType;
        return $this;
    }
    /**
     * @return string
     */
    public function getProtocolName(): string
    {
        return $this->protocolName;
    }
    /**
     * @param string $protocolName
     *
     * @return self
     */
    public function setProtocolName(string $protocolName): self
    {
        $this->initialized['protocolName'] = true;
        $this->protocolName = $protocolName;
        return $this;
    }
}