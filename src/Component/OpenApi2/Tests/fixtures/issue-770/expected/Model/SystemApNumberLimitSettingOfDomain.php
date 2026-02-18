<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SystemApNumberLimitSettingOfDomain
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
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Domain Name
     *
     * @var string
     */
    protected $domainName;
    /**
     * Number of Limit
     *
     * @var int
     */
    protected $numberLimit;
    /**
     * Share mode
     *
     * @var bool
     */
    protected $shared;
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * Domain Name
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * Domain Name
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName): self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * Number of Limit
     *
     * @return int
     */
    public function getNumberLimit(): int
    {
        return $this->numberLimit;
    }
    /**
     * Number of Limit
     *
     * @param int $numberLimit
     *
     * @return self
     */
    public function setNumberLimit(int $numberLimit): self
    {
        $this->initialized['numberLimit'] = true;
        $this->numberLimit = $numberLimit;
        return $this;
    }
    /**
     * Share mode
     *
     * @return bool
     */
    public function getShared(): bool
    {
        return $this->shared;
    }
    /**
     * Share mode
     *
     * @param bool $shared
     *
     * @return self
     */
    public function setShared(bool $shared): self
    {
        $this->initialized['shared'] = true;
        $this->shared = $shared;
        return $this;
    }
}