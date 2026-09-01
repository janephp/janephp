<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorDetailsAdditionalData implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $disqualified;
    /**
     * @var bool
     */
    public bool $disqualifiedException;
    public function definedProperties(): array
    {
        return ['disqualified' => 'disqualified', 'disqualifiedException' => 'disqualifiedException'];
    }
}