<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAddressesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $city;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $postalCode;
    /**
     * @var string
     */
    public string $street1;
    /**
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['city' => 'city', 'country' => 'country', 'id' => 'id', 'postalCode' => 'postalCode', 'street1' => 'street1', 'type' => 'type'];
    }
}