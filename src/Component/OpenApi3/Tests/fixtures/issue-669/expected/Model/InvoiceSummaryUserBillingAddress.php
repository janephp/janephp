<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class InvoiceSummaryUserBillingAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Street address line 1
     *
     * @var string
     */
    public string $addressLine1;
    /**
     * Street address line 2
     *
     * @var string
     */
    public string $addressLine2;
    /**
     * City
     *
     * @var string
     */
    public string $city;
    /**
     * Region
     *
     * @var string
     */
    public string $region;
    /**
     * Postal code
     *
     * @var string
     */
    public string $postalCode;
    /**
     * Country (ISO2) code
     *
     * @var string
     */
    public string $countryIso2Code;
    /**
     * Timestamp billing address was created
     *
     * @var string
     */
    public string $createdAt;
    /**
     * Timestamp billing address was updated
     *
     * @var string
     */
    public string $updatedAt;
    public function definedProperties(): array
    {
        return ['addressLine1' => 'address_line1', 'addressLine2' => 'address_line2', 'city' => 'city', 'region' => 'region', 'postalCode' => 'postal_code', 'countryIso2Code' => 'country_iso2_code', 'createdAt' => 'created_at', 'updatedAt' => 'updated_at'];
    }
}