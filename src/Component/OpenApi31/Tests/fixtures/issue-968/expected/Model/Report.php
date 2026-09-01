<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue968\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue968\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue968\Runtime\AdditionalPropertiesInterface;
class Report implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ReportPeriod|null
     */
    public ?ReportPeriod $period;
    public function definedProperties(): array
    {
        return ['period' => 'period'];
    }
}