<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorDetails implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $idType;
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
    public string $middleName;
    /**
     * @var string
     */
    public string $surname;
    /**
     * @var GbPeopleReportReponseReportDirectorDetailsAddress
     */
    public GbPeopleReportReponseReportDirectorDetailsAddress $address;
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
    public string $country;
    /**
     * @var string
     */
    public string $directorType;
    /**
     * @var list<GbPeopleReportReponseReportDirectorDetailsPositionsItem>
     */
    public array $positions;
    /**
     * @var GbPeopleReportReponseReportDirectorDetailsAdditionalData
     */
    public GbPeopleReportReponseReportDirectorDetailsAdditionalData $additionalData;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'idType' => 'idType', 'name' => 'name', 'title' => 'title', 'firstName' => 'firstName', 'middleName' => 'middleName', 'surname' => 'surname', 'address' => 'address', 'gender' => 'gender', 'dateOfBirth' => 'dateOfBirth', 'country' => 'country', 'directorType' => 'directorType', 'positions' => 'positions', 'additionalData' => 'additionalData'];
    }
}