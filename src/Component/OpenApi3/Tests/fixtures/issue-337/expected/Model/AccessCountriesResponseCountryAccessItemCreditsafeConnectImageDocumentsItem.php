<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class AccessCountriesResponseCountryAccessItemCreditsafeConnectImageDocumentsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
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
        return ['name' => 'name', 'countryIso2' => 'countryIso2', 'startDate' => 'startDate', 'expireDate' => 'expireDate', 'paid' => 'paid', 'used' => 'used'];
    }
}