<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $title;
    /**
     * @var string
     */
    public string $firstName;
    /**
     * @var string
     */
    public string $surname;
    /**
     * @var GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress
     */
    public GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress $address;
    /**
     * @var string
     */
    public string $gender;
    /**
     * @var string
     */
    public string $dateOfBirth;
    /**
     * @var string
     */
    public string $directorType;
    /**
     * @var list<GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem>
     */
    public array $positions;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'title' => 'title', 'firstName' => 'firstName', 'surname' => 'surname', 'address' => 'address', 'gender' => 'gender', 'dateOfBirth' => 'dateOfBirth', 'directorType' => 'directorType', 'positions' => 'positions'];
    }
}