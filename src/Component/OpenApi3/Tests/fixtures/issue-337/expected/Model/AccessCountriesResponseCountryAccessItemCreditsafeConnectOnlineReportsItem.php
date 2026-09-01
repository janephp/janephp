<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AccessCountriesResponseCountryAccessItemCreditsafeConnectOnlineReportsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $countryName;
    /**
     * Company Report template. Full reports are default
     *
     * @var string
     */
    public string $templateName;
    /**
     * @var string
     */
    public string $countryIso2;
    /**
     * Date of when the service was enabled
     *
     * @var string
     */
    public string $startDate;
    /**
     * Date of when the service will expire
     *
     * @var string
     */
    public string $expireDate;
    /**
     * Measure of total usage available in the service
     *
     * @var int
     */
    public int $paid;
    /**
     * Service usage
     *
     * @var int
     */
    public int $used;
    public function definedProperties(): array
    {
        return ['countryName' => 'countryName', 'templateName' => 'templateName', 'countryIso2' => 'countryIso2', 'startDate' => 'startDate', 'expireDate' => 'expireDate', 'paid' => 'paid', 'used' => 'used'];
    }
}