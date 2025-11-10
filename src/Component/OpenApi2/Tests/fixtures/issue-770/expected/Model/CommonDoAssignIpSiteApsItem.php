<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CommonDoAssignIpSiteApsItem
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
    protected $apMac;
    /**
     * @var bool
     */
    protected $apServerEnabled;
    /**
     * @var bool
     */
    protected $apServerPrimary;
    /**
     * @return string
     */
    public function getApMac(): string
    {
        return $this->apMac;
    }
    /**
     * @param string $apMac
     *
     * @return self
     */
    public function setApMac(string $apMac): self
    {
        $this->initialized['apMac'] = true;
        $this->apMac = $apMac;
        return $this;
    }
    /**
     * @return bool
     */
    public function getApServerEnabled(): bool
    {
        return $this->apServerEnabled;
    }
    /**
     * @param bool $apServerEnabled
     *
     * @return self
     */
    public function setApServerEnabled(bool $apServerEnabled): self
    {
        $this->initialized['apServerEnabled'] = true;
        $this->apServerEnabled = $apServerEnabled;
        return $this;
    }
    /**
     * @return bool
     */
    public function getApServerPrimary(): bool
    {
        return $this->apServerPrimary;
    }
    /**
     * @param bool $apServerPrimary
     *
     * @return self
     */
    public function setApServerPrimary(bool $apServerPrimary): self
    {
        $this->initialized['apServerPrimary'] = true;
        $this->apServerPrimary = $apServerPrimary;
        return $this;
    }
}