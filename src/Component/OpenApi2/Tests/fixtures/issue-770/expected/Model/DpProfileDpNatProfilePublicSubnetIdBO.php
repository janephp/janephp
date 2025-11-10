<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpNatProfilePublicSubnetIdBO
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
     * prefixLength
     *
     * @var int
     */
    protected $prefixLength;
    /**
     * ip
     *
     * @var string
     */
    protected $ip;
    /**
     * prefixLength
     *
     * @return int
     */
    public function getPrefixLength(): int
    {
        return $this->prefixLength;
    }
    /**
     * prefixLength
     *
     * @param int $prefixLength
     *
     * @return self
     */
    public function setPrefixLength(int $prefixLength): self
    {
        $this->initialized['prefixLength'] = true;
        $this->prefixLength = $prefixLength;
        return $this;
    }
    /**
     * ip
     *
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
     * ip
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
}