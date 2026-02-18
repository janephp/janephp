<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class MduSegmentationProfileMduSegmentationProfileSummaryReviewData
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
    protected $apGroupNameList;
    /**
     * @var string
     */
    protected $ethernetProfileName;
    /**
     * @var string
     */
    protected $apModelList;
    /**
     * @var string
     */
    protected $wlanNameList;
    /**
     * @var string
     */
    protected $wlanSsid;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $result;
    /**
     * @return string
     */
    public function getApGroupNameList(): string
    {
        return $this->apGroupNameList;
    }
    /**
     * @param string $apGroupNameList
     *
     * @return self
     */
    public function setApGroupNameList(string $apGroupNameList): self
    {
        $this->initialized['apGroupNameList'] = true;
        $this->apGroupNameList = $apGroupNameList;
        return $this;
    }
    /**
     * @return string
     */
    public function getEthernetProfileName(): string
    {
        return $this->ethernetProfileName;
    }
    /**
     * @param string $ethernetProfileName
     *
     * @return self
     */
    public function setEthernetProfileName(string $ethernetProfileName): self
    {
        $this->initialized['ethernetProfileName'] = true;
        $this->ethernetProfileName = $ethernetProfileName;
        return $this;
    }
    /**
     * @return string
     */
    public function getApModelList(): string
    {
        return $this->apModelList;
    }
    /**
     * @param string $apModelList
     *
     * @return self
     */
    public function setApModelList(string $apModelList): self
    {
        $this->initialized['apModelList'] = true;
        $this->apModelList = $apModelList;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanNameList(): string
    {
        return $this->wlanNameList;
    }
    /**
     * @param string $wlanNameList
     *
     * @return self
     */
    public function setWlanNameList(string $wlanNameList): self
    {
        $this->initialized['wlanNameList'] = true;
        $this->wlanNameList = $wlanNameList;
        return $this;
    }
    /**
     * @return string
     */
    public function getWlanSsid(): string
    {
        return $this->wlanSsid;
    }
    /**
     * @param string $wlanSsid
     *
     * @return self
     */
    public function setWlanSsid(string $wlanSsid): self
    {
        $this->initialized['wlanSsid'] = true;
        $this->wlanSsid = $wlanSsid;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getResult(): string
    {
        return $this->result;
    }
    /**
     * @param string $result
     *
     * @return self
     */
    public function setResult(string $result): self
    {
        $this->initialized['result'] = true;
        $this->result = $result;
        return $this;
    }
}