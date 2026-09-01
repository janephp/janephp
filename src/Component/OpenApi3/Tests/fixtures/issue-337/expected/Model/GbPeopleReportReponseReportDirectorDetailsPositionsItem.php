<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorDetailsPositionsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
        return ['dateAppointed' => 'dateAppointed', 'positionName' => 'positionName'];
    }
}