<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ClientQueryTcWithQuota
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
    protected $tcName;
    /**
     * @var string
     */
    protected $tcMaxQuota;
    /**
     * @var string
     */
    protected $tcRemainingQuota;
    /**
     * @return string
     */
    public function getTcName(): string
    {
        return $this->tcName;
    }
    /**
     * @param string $tcName
     *
     * @return self
     */
    public function setTcName(string $tcName): self
    {
        $this->initialized['tcName'] = true;
        $this->tcName = $tcName;
        return $this;
    }
    /**
     * @return string
     */
    public function getTcMaxQuota(): string
    {
        return $this->tcMaxQuota;
    }
    /**
     * @param string $tcMaxQuota
     *
     * @return self
     */
    public function setTcMaxQuota(string $tcMaxQuota): self
    {
        $this->initialized['tcMaxQuota'] = true;
        $this->tcMaxQuota = $tcMaxQuota;
        return $this;
    }
    /**
     * @return string
     */
    public function getTcRemainingQuota(): string
    {
        return $this->tcRemainingQuota;
    }
    /**
     * @param string $tcRemainingQuota
     *
     * @return self
     */
    public function setTcRemainingQuota(string $tcRemainingQuota): self
    {
        $this->initialized['tcRemainingQuota'] = true;
        $this->tcRemainingQuota = $tcRemainingQuota;
        return $this;
    }
}