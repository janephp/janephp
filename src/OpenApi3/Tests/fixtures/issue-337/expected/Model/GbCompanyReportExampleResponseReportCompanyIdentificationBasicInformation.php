<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation
{
    /**
     * 
     *
     * @var string
     */
    protected $businessName;
    /**
     * 
     *
     * @var string
     */
    protected $registeredCompanyName;
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
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationDate;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm
     */
    protected $legalForm;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus
     */
    protected $companyStatus;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity
     */
    protected $principalActivity;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress
     */
    protected $contactAddress;
    /**
     * 
     *
     * @return string
     */
    public function getBusinessName() : string
    {
        return $this->businessName;
    }
    /**
     * 
     *
     * @param string $businessName
     *
     * @return self
     */
    public function setBusinessName(string $businessName) : self
    {
        $this->businessName = $businessName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegisteredCompanyName() : string
    {
        return $this->registeredCompanyName;
    }
    /**
     * 
     *
     * @param string $registeredCompanyName
     *
     * @return self
     */
    public function setRegisteredCompanyName(string $registeredCompanyName) : self
    {
        $this->registeredCompanyName = $registeredCompanyName;
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
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
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
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm
     */
    public function getLegalForm() : GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm
    {
        return $this->legalForm;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm $legalForm
     *
     * @return self
     */
    public function setLegalForm(GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationLegalForm $legalForm) : self
    {
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus
     */
    public function getCompanyStatus() : GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus
    {
        return $this->companyStatus;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus $companyStatus
     *
     * @return self
     */
    public function setCompanyStatus(GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationCompanyStatus $companyStatus) : self
    {
        $this->companyStatus = $companyStatus;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity
     */
    public function getPrincipalActivity() : GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity
    {
        return $this->principalActivity;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity $principalActivity
     *
     * @return self
     */
    public function setPrincipalActivity(GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationPrincipalActivity $principalActivity) : self
    {
        $this->principalActivity = $principalActivity;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress
     */
    public function getContactAddress() : GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress
    {
        return $this->contactAddress;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress $contactAddress
     *
     * @return self
     */
    public function setContactAddress(GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformationContactAddress $contactAddress) : self
    {
        $this->contactAddress = $contactAddress;
        return $this;
    }
}