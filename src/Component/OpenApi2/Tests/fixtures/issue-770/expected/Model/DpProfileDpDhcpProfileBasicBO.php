<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DpProfileDpDhcpProfileBasicBO
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
     * profileName
     *
     * @var string
     */
    protected $profileName;
    /**
     * profileId
     *
     * @var string
     */
    protected $profileId;
    /**
     * domainName
     *
     * @var string
     */
    protected $domainName;
    /**
     * description
     *
     * @var string
     */
    protected $description;
    /**
     * primaryDnsServer
     *
     * @var string
     */
    protected $primaryDnsServer;
    /**
     * secondaryDnsServer
     *
     * @var string
     */
    protected $secondaryDnsServer;
    /**
     * defaultLeaseTime
     *
     * @var int
     */
    protected $defaultLeaseTime;
    /**
     * profileName
     *
     * @return string
     */
    public function getProfileName(): string
    {
        return $this->profileName;
    }
    /**
     * profileName
     *
     * @param string $profileName
     *
     * @return self
     */
    public function setProfileName(string $profileName): self
    {
        $this->initialized['profileName'] = true;
        $this->profileName = $profileName;
        return $this;
    }
    /**
     * profileId
     *
     * @return string
     */
    public function getProfileId(): string
    {
        return $this->profileId;
    }
    /**
     * profileId
     *
     * @param string $profileId
     *
     * @return self
     */
    public function setProfileId(string $profileId): self
    {
        $this->initialized['profileId'] = true;
        $this->profileId = $profileId;
        return $this;
    }
    /**
     * domainName
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * domainName
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
     * description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * primaryDnsServer
     *
     * @return string
     */
    public function getPrimaryDnsServer(): string
    {
        return $this->primaryDnsServer;
    }
    /**
     * primaryDnsServer
     *
     * @param string $primaryDnsServer
     *
     * @return self
     */
    public function setPrimaryDnsServer(string $primaryDnsServer): self
    {
        $this->initialized['primaryDnsServer'] = true;
        $this->primaryDnsServer = $primaryDnsServer;
        return $this;
    }
    /**
     * secondaryDnsServer
     *
     * @return string
     */
    public function getSecondaryDnsServer(): string
    {
        return $this->secondaryDnsServer;
    }
    /**
     * secondaryDnsServer
     *
     * @param string $secondaryDnsServer
     *
     * @return self
     */
    public function setSecondaryDnsServer(string $secondaryDnsServer): self
    {
        $this->initialized['secondaryDnsServer'] = true;
        $this->secondaryDnsServer = $secondaryDnsServer;
        return $this;
    }
    /**
     * defaultLeaseTime
     *
     * @return int
     */
    public function getDefaultLeaseTime(): int
    {
        return $this->defaultLeaseTime;
    }
    /**
     * defaultLeaseTime
     *
     * @param int $defaultLeaseTime
     *
     * @return self
     */
    public function setDefaultLeaseTime(int $defaultLeaseTime): self
    {
        $this->initialized['defaultLeaseTime'] = true;
        $this->defaultLeaseTime = $defaultLeaseTime;
        return $this;
    }
}