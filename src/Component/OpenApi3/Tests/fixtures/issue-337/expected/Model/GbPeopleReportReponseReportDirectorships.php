<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbPeopleReportReponseReportDirectorships implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GbPeopleReportReponseReportDirectorshipsCurrentItem>
     */
    public array $current;
    /**
     * @var list<GbPeopleReportReponseReportDirectorshipsInactiveItem>
     */
    public array $inactive;
    /**
     * @var list<GbPeopleReportReponseReportDirectorshipsPreviousItem>
     */
    public array $previous;
    public function definedProperties(): array
    {
        return ['current' => 'current', 'inactive' => 'inactive', 'previous' => 'previous'];
    }
}