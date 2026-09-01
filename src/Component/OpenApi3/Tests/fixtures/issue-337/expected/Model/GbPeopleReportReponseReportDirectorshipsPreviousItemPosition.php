<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorshipsPreviousItemPosition implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $resignationDate;
    /**
     * @var string
     */
    public string $dateAppointed;
    /**
     * @var string
     */
    public string $positionName;
    public function definedProperties(): array
    {
        return ['resignationDate' => 'resignationDate', 'dateAppointed' => 'dateAppointed', 'positionName' => 'positionName'];
    }
}