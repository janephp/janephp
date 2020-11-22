<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportContactInformation
{
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
        $this->websites = $websites;
        return $this;
    }
}