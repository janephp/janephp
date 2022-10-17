<?php

namespace CreditSafe\API\Model;

class GbPeopleReportReponseReportDirectorshipsCurrentItem extends \ArrayObject
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
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemPosition
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
     * @var int
     */
    protected $legalCount;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore
     */
    protected $creditScore;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData
     */
    protected $additionalData;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure
     */
    protected $latestTurnoverFigure;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth
     */
    protected $netWorth;
    /**
     * 
     *
     * @var GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount
     */
    protected $legalAmount;
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
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemPosition
     */
    public function getPosition() : GbPeopleReportReponseReportDirectorshipsCurrentItemPosition
    {
        return $this->position;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemPosition $position
     *
     * @return self
     */
    public function setPosition(GbPeopleReportReponseReportDirectorshipsCurrentItemPosition $position) : self
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
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore
     */
    public function getCreditScore() : GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore
    {
        return $this->creditScore;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore $creditScore
     *
     * @return self
     */
    public function setCreditScore(GbPeopleReportReponseReportDirectorshipsCurrentItemCreditScore $creditScore) : self
    {
        $this->creditScore = $creditScore;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData
     */
    public function getAdditionalData() : GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(GbPeopleReportReponseReportDirectorshipsCurrentItemAdditionalData $additionalData) : self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure
     */
    public function getLatestTurnoverFigure() : GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure
    {
        return $this->latestTurnoverFigure;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure $latestTurnoverFigure
     *
     * @return self
     */
    public function setLatestTurnoverFigure(GbPeopleReportReponseReportDirectorshipsCurrentItemLatestTurnoverFigure $latestTurnoverFigure) : self
    {
        $this->latestTurnoverFigure = $latestTurnoverFigure;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth
     */
    public function getNetWorth() : GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth
    {
        return $this->netWorth;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth $netWorth
     *
     * @return self
     */
    public function setNetWorth(GbPeopleReportReponseReportDirectorshipsCurrentItemNetWorth $netWorth) : self
    {
        $this->netWorth = $netWorth;
        return $this;
    }
    /**
     * 
     *
     * @return GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount
     */
    public function getLegalAmount() : GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount
    {
        return $this->legalAmount;
    }
    /**
     * 
     *
     * @param GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount $legalAmount
     *
     * @return self
     */
    public function setLegalAmount(GbPeopleReportReponseReportDirectorshipsCurrentItemLegalAmount $legalAmount) : self
    {
        $this->legalAmount = $legalAmount;
        return $this;
    }
}