<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class WifiCallingEpdg
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
     * Fully qualified domain name of ePDG
     *
     * @var string
     */
    protected $fqdn;
    /**
     * @var string
     */
    protected $ip;
    /**
     * Fully qualified domain name of ePDG
     *
     * @return string
     */
    public function getFqdn(): string
    {
        return $this->fqdn;
    }
    /**
     * Fully qualified domain name of ePDG
     *
     * @param string $fqdn
     *
     * @return self
     */
    public function setFqdn(string $fqdn): self
    {
        $this->initialized['fqdn'] = true;
        $this->fqdn = $fqdn;
        return $this;
    }
    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }
    /**
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