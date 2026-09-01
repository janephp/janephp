<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class PeopleSearchSuccessResultDirectorsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $peopleId;
    /**
     * @var string
     */
    public string $firstName;
    /**
     * @var string
     */
    public string $lastName;
    /**
     * @var string
     */
    public string $country;
    /**
     * @var PeopleSearchSuccessResultDirectorsItemCompany
     */
    public PeopleSearchSuccessResultDirectorsItemCompany $company;
    /**
     * @var PeopleSearchSuccessResultDirectorsItemAddress
     */
    public PeopleSearchSuccessResultDirectorsItemAddress $address;
    /**
     * @var string
     */
    public string $status;
    /**
     * @var string
     */
    public string $dateOfLatestChange;
    /**
     * @var string
     */
    public string $dateOfBirth;
    /**
     * @var string
     */
    public string $localDirectorNumber;
    public function definedProperties(): array
    {
        return ['peopleId' => 'peopleId', 'firstName' => 'firstName', 'lastName' => 'lastName', 'country' => 'country', 'company' => 'company', 'address' => 'address', 'status' => 'status', 'dateOfLatestChange' => 'dateOfLatestChange', 'dateOfBirth' => 'dateOfBirth', 'localDirectorNumber' => 'localDirectorNumber'];
    }
}