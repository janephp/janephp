<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportDirectors implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem>
     */
    public array $currentDirectors;
    /**
     * @var list<GbCompanyReportExampleResponseReportDirectorsPreviousDirectorsItem>
     */
    public array $previousDirectors;
    public function definedProperties(): array
    {
        return ['currentDirectors' => 'currentDirectors', 'previousDirectors' => 'previousDirectors'];
    }
}