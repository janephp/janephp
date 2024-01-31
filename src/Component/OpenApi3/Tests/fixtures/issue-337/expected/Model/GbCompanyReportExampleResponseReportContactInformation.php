<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportContactInformation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportContactInformationMainAddress
     */
    protected $mainAddress;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem[]
     */
    protected $otherAddresses;
    /**
     * 
     *
     * @var string[]
     */
    protected $websites;
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportContactInformationMainAddress
     */
    public function getMainAddress() : GbCompanyReportExampleResponseReportContactInformationMainAddress
    {
        return $this->mainAddress;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportContactInformationMainAddress $mainAddress
     *
     * @return self
     */
    public function setMainAddress(GbCompanyReportExampleResponseReportContactInformationMainAddress $mainAddress) : self
    {
        $this->initialized['mainAddress'] = true;
        $this->mainAddress = $mainAddress;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem[]
     */
    public function getOtherAddresses() : array
    {
        return $this->otherAddresses;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportContactInformationOtherAddressesItem[] $otherAddresses
     *
     * @return self
     */
    public function setOtherAddresses(array $otherAddresses) : self
    {
        $this->initialized['otherAddresses'] = true;
        $this->otherAddresses = $otherAddresses;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getWebsites() : array
    {
        return $this->websites;
    }
    /**
     * 
     *
     * @param string[] $websites
     *
     * @return self
     */
    public function setWebsites(array $websites) : self
    {
        $this->initialized['websites'] = true;
        $this->websites = $websites;
        return $this;
    }
}