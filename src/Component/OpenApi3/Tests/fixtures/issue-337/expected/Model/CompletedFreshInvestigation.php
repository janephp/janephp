<?php

namespace CreditSafe\API\Model;

class CompletedFreshInvestigation extends \ArrayObject
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
     * @var string
     */
    protected $chargeReference;
    /**
     * 
     *
     * @var CompletedFreshInvestigationContactDetails
     */
    protected $contactDetails;
    /**
     * 
     *
     * @var string
     */
    protected $creationDate;
    /**
     * 
     *
     * @var string
     */
    protected $lastStatusChangeDate;
    /**
     * 
     *
     * @var int
     */
    protected $orderID;
    /**
     * 
     *
     * @var string
     */
    protected $reportDate;
    /**
     * 
     *
     * @var CompletedFreshInvestigationSearchCriteria
     */
    protected $searchCriteria;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $sections;
    /**
     * 
     *
     * @var CompletedFreshInvestigationStatus
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $transactionID;
    /**
     * 
     *
     * @return string
     */
    public function getChargeReference() : string
    {
        return $this->chargeReference;
    }
    /**
     * 
     *
     * @param string $chargeReference
     *
     * @return self
     */
    public function setChargeReference(string $chargeReference) : self
    {
        $this->initialized['chargeReference'] = true;
        $this->chargeReference = $chargeReference;
        return $this;
    }
    /**
     * 
     *
     * @return CompletedFreshInvestigationContactDetails
     */
    public function getContactDetails() : CompletedFreshInvestigationContactDetails
    {
        return $this->contactDetails;
    }
    /**
     * 
     *
     * @param CompletedFreshInvestigationContactDetails $contactDetails
     *
     * @return self
     */
    public function setContactDetails(CompletedFreshInvestigationContactDetails $contactDetails) : self
    {
        $this->initialized['contactDetails'] = true;
        $this->contactDetails = $contactDetails;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreationDate() : string
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate(string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastStatusChangeDate() : string
    {
        return $this->lastStatusChangeDate;
    }
    /**
     * 
     *
     * @param string $lastStatusChangeDate
     *
     * @return self
     */
    public function setLastStatusChangeDate(string $lastStatusChangeDate) : self
    {
        $this->initialized['lastStatusChangeDate'] = true;
        $this->lastStatusChangeDate = $lastStatusChangeDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrderID() : int
    {
        return $this->orderID;
    }
    /**
     * 
     *
     * @param int $orderID
     *
     * @return self
     */
    public function setOrderID(int $orderID) : self
    {
        $this->initialized['orderID'] = true;
        $this->orderID = $orderID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReportDate() : string
    {
        return $this->reportDate;
    }
    /**
     * 
     *
     * @param string $reportDate
     *
     * @return self
     */
    public function setReportDate(string $reportDate) : self
    {
        $this->initialized['reportDate'] = true;
        $this->reportDate = $reportDate;
        return $this;
    }
    /**
     * 
     *
     * @return CompletedFreshInvestigationSearchCriteria
     */
    public function getSearchCriteria() : CompletedFreshInvestigationSearchCriteria
    {
        return $this->searchCriteria;
    }
    /**
     * 
     *
     * @param CompletedFreshInvestigationSearchCriteria $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(CompletedFreshInvestigationSearchCriteria $searchCriteria) : self
    {
        $this->initialized['searchCriteria'] = true;
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getSections() : array
    {
        return $this->sections;
    }
    /**
     * 
     *
     * @param mixed[] $sections
     *
     * @return self
     */
    public function setSections(array $sections) : self
    {
        $this->initialized['sections'] = true;
        $this->sections = $sections;
        return $this;
    }
    /**
     * 
     *
     * @return CompletedFreshInvestigationStatus
     */
    public function getStatus() : CompletedFreshInvestigationStatus
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param CompletedFreshInvestigationStatus $status
     *
     * @return self
     */
    public function setStatus(CompletedFreshInvestigationStatus $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTransactionID() : int
    {
        return $this->transactionID;
    }
    /**
     * 
     *
     * @param int $transactionID
     *
     * @return self
     */
    public function setTransactionID(int $transactionID) : self
    {
        $this->initialized['transactionID'] = true;
        $this->transactionID = $transactionID;
        return $this;
    }
}