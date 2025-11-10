<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduProfileApGroupInfo
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
    protected $apGroupId;
    /**
     * @var string
     */
    protected $ethProfileId;
    /**
     * @var list<string>
     */
    protected $wlanList;
    /**
     * @return string
     */
    public function getApGroupId(): string
    {
        return $this->apGroupId;
    }
    /**
     * @param string $apGroupId
     *
     * @return self
     */
    public function setApGroupId(string $apGroupId): self
    {
        $this->initialized['apGroupId'] = true;
        $this->apGroupId = $apGroupId;
        return $this;
    }
    /**
     * @return string
     */
    public function getEthProfileId(): string
    {
        return $this->ethProfileId;
    }
    /**
     * @param string $ethProfileId
     *
     * @return self
     */
    public function setEthProfileId(string $ethProfileId): self
    {
        $this->initialized['ethProfileId'] = true;
        $this->ethProfileId = $ethProfileId;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getWlanList(): array
    {
        return $this->wlanList;
    }
    /**
     * @param list<string> $wlanList
     *
     * @return self
     */
    public function setWlanList(array $wlanList): self
    {
        $this->initialized['wlanList'] = true;
        $this->wlanList = $wlanList;
        return $this;
    }
}