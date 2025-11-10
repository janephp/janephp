<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceCreateWechat
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
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Authentication URL of the wechat profile
     *
     * @var string
     */
    protected $authUrl;
    /**
     * DNAT destination of the wechat profile
     *
     * @var string
     */
    protected $dnatDestination;
    /**
     * Grace period of the wechat profile
     *
     * @var int
     */
    protected $gracePeriod = 60;
    /**
     * Black list of the wechat profile
     *
     * @var string
     */
    protected $blackList;
    /**
     * White list of the wechat profile
     *
     * @var list<string>
     */
    protected $whiteList;
    /**
     * DNAT Port Mapping of the wechat profile
     *
     * @var list<PortalserviceDnatPortMapping>
     */
    protected $dnatPortMapping;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
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
     * Authentication URL of the wechat profile
     *
     * @return string
     */
    public function getAuthUrl(): string
    {
        return $this->authUrl;
    }
    /**
     * Authentication URL of the wechat profile
     *
     * @param string $authUrl
     *
     * @return self
     */
    public function setAuthUrl(string $authUrl): self
    {
        $this->initialized['authUrl'] = true;
        $this->authUrl = $authUrl;
        return $this;
    }
    /**
     * DNAT destination of the wechat profile
     *
     * @return string
     */
    public function getDnatDestination(): string
    {
        return $this->dnatDestination;
    }
    /**
     * DNAT destination of the wechat profile
     *
     * @param string $dnatDestination
     *
     * @return self
     */
    public function setDnatDestination(string $dnatDestination): self
    {
        $this->initialized['dnatDestination'] = true;
        $this->dnatDestination = $dnatDestination;
        return $this;
    }
    /**
     * Grace period of the wechat profile
     *
     * @return int
     */
    public function getGracePeriod(): int
    {
        return $this->gracePeriod;
    }
    /**
     * Grace period of the wechat profile
     *
     * @param int $gracePeriod
     *
     * @return self
     */
    public function setGracePeriod(int $gracePeriod): self
    {
        $this->initialized['gracePeriod'] = true;
        $this->gracePeriod = $gracePeriod;
        return $this;
    }
    /**
     * Black list of the wechat profile
     *
     * @return string
     */
    public function getBlackList(): string
    {
        return $this->blackList;
    }
    /**
     * Black list of the wechat profile
     *
     * @param string $blackList
     *
     * @return self
     */
    public function setBlackList(string $blackList): self
    {
        $this->initialized['blackList'] = true;
        $this->blackList = $blackList;
        return $this;
    }
    /**
     * White list of the wechat profile
     *
     * @return list<string>
     */
    public function getWhiteList(): array
    {
        return $this->whiteList;
    }
    /**
     * White list of the wechat profile
     *
     * @param list<string> $whiteList
     *
     * @return self
     */
    public function setWhiteList(array $whiteList): self
    {
        $this->initialized['whiteList'] = true;
        $this->whiteList = $whiteList;
        return $this;
    }
    /**
     * DNAT Port Mapping of the wechat profile
     *
     * @return list<PortalserviceDnatPortMapping>
     */
    public function getDnatPortMapping(): array
    {
        return $this->dnatPortMapping;
    }
    /**
     * DNAT Port Mapping of the wechat profile
     *
     * @param list<PortalserviceDnatPortMapping> $dnatPortMapping
     *
     * @return self
     */
    public function setDnatPortMapping(array $dnatPortMapping): self
    {
        $this->initialized['dnatPortMapping'] = true;
        $this->dnatPortMapping = $dnatPortMapping;
        return $this;
    }
}