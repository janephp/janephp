<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorSummary implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $currentAppointments;
    /**
     * @var int
     */
    public int $inactiveAppointments;
    /**
     * @var int
     */
    public int $previousAppointments;
    public function definedProperties(): array
    {
        return ['currentAppointments' => 'currentAppointments', 'inactiveAppointments' => 'inactiveAppointments', 'previousAppointments' => 'previousAppointments'];
    }
}