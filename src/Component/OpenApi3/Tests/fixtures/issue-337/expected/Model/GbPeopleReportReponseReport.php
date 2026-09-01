<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReport implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $directorId;
    /**
     * @var GbPeopleReportReponseReportDirectorSummary
     */
    public GbPeopleReportReponseReportDirectorSummary $directorSummary;
    /**
     * @var GbPeopleReportReponseReportDirectorDetails
     */
    public GbPeopleReportReponseReportDirectorDetails $directorDetails;
    /**
     * @var list<GbPeopleReportReponseReportOtherAddressesItem>
     */
    public array $otherAddresses;
    /**
     * @var GbPeopleReportReponseReportDirectorships
     */
    public GbPeopleReportReponseReportDirectorships $directorships;
    public function definedProperties(): array
    {
        return ['directorId' => 'directorId', 'directorSummary' => 'directorSummary', 'directorDetails' => 'directorDetails', 'otherAddresses' => 'otherAddresses', 'directorships' => 'directorships'];
    }
}