<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class DnsSpoofingProfileDnsSpoofingRule
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
     * Rule's Domain Name
     *
     * @var string
     */
    protected $domainName;
    /**
     * Rule's Ip addresses
     *
     * @var list<string>
     */
    protected $ipList;
    /**
     * Rule's Domain Name
     *
     * @return string
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }
    /**
     * Rule's Domain Name
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
     * Rule's Ip addresses
     *
     * @return list<string>
     */
    public function getIpList(): array
    {
        return $this->ipList;
    }
    /**
     * Rule's Ip addresses
     *
     * @param list<string> $ipList
     *
     * @return self
     */
    public function setIpList(array $ipList): self
    {
        $this->initialized['ipList'] = true;
        $this->ipList = $ipList;
        return $this;
    }
}