<?php

namespace CreditSafe\API\Model;

class AccessCountriesResponseCountryAccessItem extends \ArrayObject
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
     * Country usage for Company Reports service
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem>
     */
    protected $creditsafeConnectOnlineReports;
    /**
     * 
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem>
     */
    protected $creditsafeConnectOfflineReports;
    /**
     * 
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem>
     */
    protected $creditsafeConnectMonitoring;
    /**
     * 
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem>
     */
    protected $creditsafeConnectDirectorReports;
    /**
     * 
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem>
     */
    protected $creditsafeConnectImageDocuments;
    /**
     * 
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem>
     */
    protected $creditsafeConnectBankValidation;
    /**
     * 
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem>
     */
    protected $creditsafeConnectBankVerification;
    /**
     * Country usage for Company Reports service
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem>
     */
    public function getCreditsafeConnectOnlineReports() : array
    {
        return $this->creditsafeConnectOnlineReports;
    }
    /**
     * Country usage for Company Reports service
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem> $creditsafeConnectOnlineReports
     *
     * @return self
     */
    public function setCreditsafeConnectOnlineReports(array $creditsafeConnectOnlineReports) : self
    {
        $this->initialized['creditsafeConnectOnlineReports'] = true;
        $this->creditsafeConnectOnlineReports = $creditsafeConnectOnlineReports;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem>
     */
    public function getCreditsafeConnectOfflineReports() : array
    {
        return $this->creditsafeConnectOfflineReports;
    }
    /**
     * 
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem> $creditsafeConnectOfflineReports
     *
     * @return self
     */
    public function setCreditsafeConnectOfflineReports(array $creditsafeConnectOfflineReports) : self
    {
        $this->initialized['creditsafeConnectOfflineReports'] = true;
        $this->creditsafeConnectOfflineReports = $creditsafeConnectOfflineReports;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem>
     */
    public function getCreditsafeConnectMonitoring() : array
    {
        return $this->creditsafeConnectMonitoring;
    }
    /**
     * 
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem> $creditsafeConnectMonitoring
     *
     * @return self
     */
    public function setCreditsafeConnectMonitoring(array $creditsafeConnectMonitoring) : self
    {
        $this->initialized['creditsafeConnectMonitoring'] = true;
        $this->creditsafeConnectMonitoring = $creditsafeConnectMonitoring;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem>
     */
    public function getCreditsafeConnectDirectorReports() : array
    {
        return $this->creditsafeConnectDirectorReports;
    }
    /**
     * 
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem> $creditsafeConnectDirectorReports
     *
     * @return self
     */
    public function setCreditsafeConnectDirectorReports(array $creditsafeConnectDirectorReports) : self
    {
        $this->initialized['creditsafeConnectDirectorReports'] = true;
        $this->creditsafeConnectDirectorReports = $creditsafeConnectDirectorReports;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem>
     */
    public function getCreditsafeConnectImageDocuments() : array
    {
        return $this->creditsafeConnectImageDocuments;
    }
    /**
     * 
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem> $creditsafeConnectImageDocuments
     *
     * @return self
     */
    public function setCreditsafeConnectImageDocuments(array $creditsafeConnectImageDocuments) : self
    {
        $this->initialized['creditsafeConnectImageDocuments'] = true;
        $this->creditsafeConnectImageDocuments = $creditsafeConnectImageDocuments;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem>
     */
    public function getCreditsafeConnectBankValidation() : array
    {
        return $this->creditsafeConnectBankValidation;
    }
    /**
     * 
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem> $creditsafeConnectBankValidation
     *
     * @return self
     */
    public function setCreditsafeConnectBankValidation(array $creditsafeConnectBankValidation) : self
    {
        $this->initialized['creditsafeConnectBankValidation'] = true;
        $this->creditsafeConnectBankValidation = $creditsafeConnectBankValidation;
        return $this;
    }
    /**
     * 
     *
     * @return list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem>
     */
    public function getCreditsafeConnectBankVerification() : array
    {
        return $this->creditsafeConnectBankVerification;
    }
    /**
     * 
     *
     * @param list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem> $creditsafeConnectBankVerification
     *
     * @return self
     */
    public function setCreditsafeConnectBankVerification(array $creditsafeConnectBankVerification) : self
    {
        $this->initialized['creditsafeConnectBankVerification'] = true;
        $this->creditsafeConnectBankVerification = $creditsafeConnectBankVerification;
        return $this;
    }
}