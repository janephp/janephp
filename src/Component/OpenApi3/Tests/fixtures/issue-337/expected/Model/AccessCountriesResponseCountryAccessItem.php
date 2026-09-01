<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AccessCountriesResponseCountryAccessItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Country usage for Company Reports service
     *
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem>
     */
    public array $creditsafeConnectOnlineReports;
    /**
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectOfflineReportsItem>
     */
    public array $creditsafeConnectOfflineReports;
    /**
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectMonitoringItem>
     */
    public array $creditsafeConnectMonitoring;
    /**
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectDirectorReportsItem>
     */
    public array $creditsafeConnectDirectorReports;
    /**
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem>
     */
    public array $creditsafeConnectImageDocuments;
    /**
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankValidationItem>
     */
    public array $creditsafeConnectBankValidation;
    /**
     * @var list<AccessCountriesResponseCountryAccessItemCreditsafeConnectBankVerificationItem>
     */
    public array $creditsafeConnectBankVerification;
    public function definedProperties(): array
    {
        return ['creditsafeConnectOnlineReports' => 'creditsafeConnectOnlineReports', 'creditsafeConnectOfflineReports' => 'creditsafeConnectOfflineReports', 'creditsafeConnectMonitoring' => 'creditsafeConnectMonitoring', 'creditsafeConnectDirectorReports' => 'creditsafeConnectDirectorReports', 'creditsafeConnectImageDocuments' => 'creditsafeConnectImageDocuments', 'creditsafeConnectBankValidation' => 'creditsafeConnectBankValidation', 'creditsafeConnectBankVerification' => 'creditsafeConnectBankVerification'];
    }
}