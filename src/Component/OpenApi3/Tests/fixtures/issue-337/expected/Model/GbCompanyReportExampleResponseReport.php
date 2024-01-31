<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReport extends \ArrayObject
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
     * @var string
     */
    protected $companyId;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanySummary
     */
    protected $companySummary;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentification
     */
    protected $companyIdentification;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCreditScore
     */
    protected $creditScore;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportContactInformation
     */
    protected $contactInformation;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportShareCapitalStructure
     */
    protected $shareCapitalStructure;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportDirectors
     */
    protected $directors;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportOtherInformation
     */
    protected $otherInformation;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportGroupStructure
     */
    protected $groupStructure;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportExtendedGroupStructureItem[]
     */
    protected $extendedGroupStructure;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportFinancialStatementsItem[]
     */
    protected $financialStatements;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportLocalFinancialStatementsItem[]
     */
    protected $localFinancialStatements;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportPaymentData
     */
    protected $paymentData;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportNegativeInformation
     */
    protected $negativeInformation;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportAdditionalInformation
     */
    protected $additionalInformation;
    /**
     * 
     *
     * @return string
     */
    public function getCompanyId() : string
    {
        return $this->companyId;
    }
    /**
     * 
     *
     * @param string $companyId
     *
     * @return self
     */
    public function setCompanyId(string $companyId) : self
    {
        $this->initialized['companyId'] = true;
        $this->companyId = $companyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanySummary
     */
    public function getCompanySummary() : GbCompanyReportExampleResponseReportCompanySummary
    {
        return $this->companySummary;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanySummary $companySummary
     *
     * @return self
     */
    public function setCompanySummary(GbCompanyReportExampleResponseReportCompanySummary $companySummary) : self
    {
        $this->initialized['companySummary'] = true;
        $this->companySummary = $companySummary;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentification
     */
    public function getCompanyIdentification() : GbCompanyReportExampleResponseReportCompanyIdentification
    {
        return $this->companyIdentification;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentification $companyIdentification
     *
     * @return self
     */
    public function setCompanyIdentification(GbCompanyReportExampleResponseReportCompanyIdentification $companyIdentification) : self
    {
        $this->initialized['companyIdentification'] = true;
        $this->companyIdentification = $companyIdentification;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCreditScore
     */
    public function getCreditScore() : GbCompanyReportExampleResponseReportCreditScore
    {
        return $this->creditScore;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCreditScore $creditScore
     *
     * @return self
     */
    public function setCreditScore(GbCompanyReportExampleResponseReportCreditScore $creditScore) : self
    {
        $this->initialized['creditScore'] = true;
        $this->creditScore = $creditScore;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportContactInformation
     */
    public function getContactInformation() : GbCompanyReportExampleResponseReportContactInformation
    {
        return $this->contactInformation;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportContactInformation $contactInformation
     *
     * @return self
     */
    public function setContactInformation(GbCompanyReportExampleResponseReportContactInformation $contactInformation) : self
    {
        $this->initialized['contactInformation'] = true;
        $this->contactInformation = $contactInformation;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportShareCapitalStructure
     */
    public function getShareCapitalStructure() : GbCompanyReportExampleResponseReportShareCapitalStructure
    {
        return $this->shareCapitalStructure;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportShareCapitalStructure $shareCapitalStructure
     *
     * @return self
     */
    public function setShareCapitalStructure(GbCompanyReportExampleResponseReportShareCapitalStructure $shareCapitalStructure) : self
    {
        $this->initialized['shareCapitalStructure'] = true;
        $this->shareCapitalStructure = $shareCapitalStructure;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportDirectors
     */
    public function getDirectors() : GbCompanyReportExampleResponseReportDirectors
    {
        return $this->directors;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportDirectors $directors
     *
     * @return self
     */
    public function setDirectors(GbCompanyReportExampleResponseReportDirectors $directors) : self
    {
        $this->initialized['directors'] = true;
        $this->directors = $directors;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportOtherInformation
     */
    public function getOtherInformation() : GbCompanyReportExampleResponseReportOtherInformation
    {
        return $this->otherInformation;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportOtherInformation $otherInformation
     *
     * @return self
     */
    public function setOtherInformation(GbCompanyReportExampleResponseReportOtherInformation $otherInformation) : self
    {
        $this->initialized['otherInformation'] = true;
        $this->otherInformation = $otherInformation;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportGroupStructure
     */
    public function getGroupStructure() : GbCompanyReportExampleResponseReportGroupStructure
    {
        return $this->groupStructure;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportGroupStructure $groupStructure
     *
     * @return self
     */
    public function setGroupStructure(GbCompanyReportExampleResponseReportGroupStructure $groupStructure) : self
    {
        $this->initialized['groupStructure'] = true;
        $this->groupStructure = $groupStructure;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportExtendedGroupStructureItem[]
     */
    public function getExtendedGroupStructure() : array
    {
        return $this->extendedGroupStructure;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportExtendedGroupStructureItem[] $extendedGroupStructure
     *
     * @return self
     */
    public function setExtendedGroupStructure(array $extendedGroupStructure) : self
    {
        $this->initialized['extendedGroupStructure'] = true;
        $this->extendedGroupStructure = $extendedGroupStructure;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportFinancialStatementsItem[]
     */
    public function getFinancialStatements() : array
    {
        return $this->financialStatements;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportFinancialStatementsItem[] $financialStatements
     *
     * @return self
     */
    public function setFinancialStatements(array $financialStatements) : self
    {
        $this->initialized['financialStatements'] = true;
        $this->financialStatements = $financialStatements;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportLocalFinancialStatementsItem[]
     */
    public function getLocalFinancialStatements() : array
    {
        return $this->localFinancialStatements;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportLocalFinancialStatementsItem[] $localFinancialStatements
     *
     * @return self
     */
    public function setLocalFinancialStatements(array $localFinancialStatements) : self
    {
        $this->initialized['localFinancialStatements'] = true;
        $this->localFinancialStatements = $localFinancialStatements;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportPaymentData
     */
    public function getPaymentData() : GbCompanyReportExampleResponseReportPaymentData
    {
        return $this->paymentData;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportPaymentData $paymentData
     *
     * @return self
     */
    public function setPaymentData(GbCompanyReportExampleResponseReportPaymentData $paymentData) : self
    {
        $this->initialized['paymentData'] = true;
        $this->paymentData = $paymentData;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportNegativeInformation
     */
    public function getNegativeInformation() : GbCompanyReportExampleResponseReportNegativeInformation
    {
        return $this->negativeInformation;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportNegativeInformation $negativeInformation
     *
     * @return self
     */
    public function setNegativeInformation(GbCompanyReportExampleResponseReportNegativeInformation $negativeInformation) : self
    {
        $this->initialized['negativeInformation'] = true;
        $this->negativeInformation = $negativeInformation;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportAdditionalInformation
     */
    public function getAdditionalInformation() : GbCompanyReportExampleResponseReportAdditionalInformation
    {
        return $this->additionalInformation;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportAdditionalInformation $additionalInformation
     *
     * @return self
     */
    public function setAdditionalInformation(GbCompanyReportExampleResponseReportAdditionalInformation $additionalInformation) : self
    {
        $this->initialized['additionalInformation'] = true;
        $this->additionalInformation = $additionalInformation;
        return $this;
    }
}