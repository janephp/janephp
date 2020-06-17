<?php

namespace CreditSafe\API\Model;

class ListFreshInvestigationResponseOrdersItem
{
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
    protected $userID;
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
    protected $transactionID;
    /**
     * 
     *
     * @var string
     */
    protected $chargeReference;
    /**
     * 
     *
     * @var ListFreshInvestigationResponseOrdersItemContactDetails
     */
    protected $contactDetails;
    /**
     * 
     *
     * @var ListFreshInvestigationResponseOrdersItemStatus
     */
    protected $status;
    /**
     * 
     *
     * @var bool
     */
    protected $consent;
    /**
     * 
     *
     * @var ListFreshInvestigationResponseOrdersItemSearchCriteria
     */
    protected $searchCriteria;
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
        $this->orderID = $orderID;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserID() : string
    {
        return $this->userID;
    }
    /**
     * 
     *
     * @param string $userID
     *
     * @return self
     */
    public function setUserID(string $userID) : self
    {
        $this->userID = $userID;
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
        $this->lastStatusChangeDate = $lastStatusChangeDate;
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
        $this->transactionID = $transactionID;
        return $this;
    }
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
        $this->chargeReference = $chargeReference;
        return $this;
    }
    /**
     * 
     *
     * @return ListFreshInvestigationResponseOrdersItemContactDetails
     */
    public function getContactDetails() : ListFreshInvestigationResponseOrdersItemContactDetails
    {
        return $this->contactDetails;
    }
    /**
     * 
     *
     * @param ListFreshInvestigationResponseOrdersItemContactDetails $contactDetails
     *
     * @return self
     */
    public function setContactDetails(ListFreshInvestigationResponseOrdersItemContactDetails $contactDetails) : self
    {
        $this->contactDetails = $contactDetails;
        return $this;
    }
    /**
     * 
     *
     * @return ListFreshInvestigationResponseOrdersItemStatus
     */
    public function getStatus() : ListFreshInvestigationResponseOrdersItemStatus
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param ListFreshInvestigationResponseOrdersItemStatus $status
     *
     * @return self
     */
    public function setStatus(ListFreshInvestigationResponseOrdersItemStatus $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getConsent() : bool
    {
        return $this->consent;
    }
    /**
     * 
     *
     * @param bool $consent
     *
     * @return self
     */
    public function setConsent(bool $consent) : self
    {
        $this->consent = $consent;
        return $this;
    }
    /**
     * 
     *
     * @return ListFreshInvestigationResponseOrdersItemSearchCriteria
     */
    public function getSearchCriteria() : ListFreshInvestigationResponseOrdersItemSearchCriteria
    {
        return $this->searchCriteria;
    }
    /**
     * 
     *
     * @param ListFreshInvestigationResponseOrdersItemSearchCriteria $searchCriteria
     *
     * @return self
     */
    public function setSearchCriteria(ListFreshInvestigationResponseOrdersItemSearchCriteria $searchCriteria) : self
    {
        $this->searchCriteria = $searchCriteria;
        return $this;
    }
}