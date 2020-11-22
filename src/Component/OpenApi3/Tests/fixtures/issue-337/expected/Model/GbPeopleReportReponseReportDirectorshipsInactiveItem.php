<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsInactiveItem
{
    /**
     * 
     *
     * @var string
     */
    protected $companyName;
    /**
     * 
     *
     * @var string
     */
    protected $companyNumber;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemPosition
     */
    protected $position;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationDate;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth
     */
    protected $netWorth;
    /**
     * 
     *
     * @var int
     */
    protected $legalCount;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore
     */
    protected $creditScore;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData
     */
    protected $additionalData;
    /**
     * 
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyNumber() : string
    {
        return $this->companyNumber;
    }
    /**
     * 
     *
     * @param string $companyNumber
     *
     * @return self
     */
    public function setCompanyNumber(string $companyNumber) : self
    {
        $this->companyNumber = $companyNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyRegistrationNumber() : string
    {
        return $this->companyRegistrationNumber;
    }
    /**
     * 
     *
     * @param string $companyRegistrationNumber
     *
     * @return self
     */
    public function setCompanyRegistrationNumber(string $companyRegistrationNumber) : self
    {
        $this->companyRegistrationNumber = $companyRegistrationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemPosition
     */
    public function getPosition() : GbPeopleReportReponseReportDirectorshipsInactiveItemPosition
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemPosition $position
     *
     * @return self
     */
    public function setPosition(GbPeopleReportReponseReportDirectorshipsInactiveItemPosition $position) : self
    {
        $this->position = $position;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyRegistrationDate() : string
    {
        return $this->companyRegistrationDate;
    }
    /**
     * 
     *
     * @param string $companyRegistrationDate
     *
     * @return self
     */
    public function setCompanyRegistrationDate(string $companyRegistrationDate) : self
    {
        $this->companyRegistrationDate = $companyRegistrationDate;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth
     */
    public function getNetWorth() : GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth
    {
        return $this->netWorth;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth $netWorth
     *
     * @return self
     */
    public function setNetWorth(GbPeopleReportReponseReportDirectorshipsInactiveItemNetWorth $netWorth) : self
    {
        $this->netWorth = $netWorth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLegalCount() : int
    {
        return $this->legalCount;
    }
    /**
     * 
     *
     * @param int $legalCount
     *
     * @return self
     */
    public function setLegalCount(int $legalCount) : self
    {
        $this->legalCount = $legalCount;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore
     */
    public function getCreditScore() : GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore
    {
        return $this->creditScore;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore $creditScore
     *
     * @return self
     */
    public function setCreditScore(GbPeopleReportReponseReportDirectorshipsInactiveItemCreditScore $creditScore) : self
    {
        $this->creditScore = $creditScore;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData
     */
    public function getAdditionalData() : GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(GbPeopleReportReponseReportDirectorshipsInactiveItemAdditionalData $additionalData) : self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
}