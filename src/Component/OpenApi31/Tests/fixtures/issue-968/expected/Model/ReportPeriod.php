<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue968\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue968\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue968\Runtime\AdditionalPropertiesInterface;
class ReportPeriod implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string|null
     */
    public ?string $from;
    public function definedProperties(): array
    {
        return ['from' => 'from'];
    }
}