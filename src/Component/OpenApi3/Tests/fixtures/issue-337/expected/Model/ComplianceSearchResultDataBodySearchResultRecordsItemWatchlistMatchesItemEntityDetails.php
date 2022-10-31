<?php

namespace CreditSafe\API\Model;

class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem[]
     */
    protected $additionalInfo;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem[]
     */
    protected $addresses;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem[]
     */
    protected $akAs;
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var string
     */
    protected $dateListed;
    /**
     * 
     *
     * @var string
     */
    protected $entityType;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem[]
     */
    protected $iDs;
    /**
     * 
     *
     * @var string
     */
    protected $listReferenceNumber;
    /**
     * 
     *
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $reasonListed;
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem[]
     */
    public function getAdditionalInfo() : array
    {
        return $this->additionalInfo;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem[] $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo) : self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem[]
     */
    public function getAddresses() : array
    {
        return $this->addresses;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem[] $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses) : self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem[]
     */
    public function getAkAs() : array
    {
        return $this->akAs;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAkAsItem[] $akAs
     *
     * @return self
     */
    public function setAkAs(array $akAs) : self
    {
        $this->initialized['akAs'] = true;
        $this->akAs = $akAs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDateListed() : string
    {
        return $this->dateListed;
    }
    /**
     * 
     *
     * @param string $dateListed
     *
     * @return self
     */
    public function setDateListed(string $dateListed) : self
    {
        $this->initialized['dateListed'] = true;
        $this->dateListed = $dateListed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEntityType() : string
    {
        return $this->entityType;
    }
    /**
     * 
     *
     * @param string $entityType
     *
     * @return self
     */
    public function setEntityType(string $entityType) : self
    {
        $this->initialized['entityType'] = true;
        $this->entityType = $entityType;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem[]
     */
    public function getIDs() : array
    {
        return $this->iDs;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsIDsItem[] $iDs
     *
     * @return self
     */
    public function setIDs(array $iDs) : self
    {
        $this->initialized['iDs'] = true;
        $this->iDs = $iDs;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getListReferenceNumber() : string
    {
        return $this->listReferenceNumber;
    }
    /**
     * 
     *
     * @param string $listReferenceNumber
     *
     * @return self
     */
    public function setListReferenceNumber(string $listReferenceNumber) : self
    {
        $this->initialized['listReferenceNumber'] = true;
        $this->listReferenceNumber = $listReferenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName
     */
    public function getName() : ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName $name
     *
     * @return self
     */
    public function setName(ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsName $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReasonListed() : string
    {
        return $this->reasonListed;
    }
    /**
     * 
     *
     * @param string $reasonListed
     *
     * @return self
     */
    public function setReasonListed(string $reasonListed) : self
    {
        $this->initialized['reasonListed'] = true;
        $this->reasonListed = $reasonListed;
        return $this;
    }
}