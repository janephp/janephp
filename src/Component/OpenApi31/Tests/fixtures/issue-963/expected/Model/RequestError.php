<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue963\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue963\Runtime\AdditionalPropertiesInterface;
class RequestError implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $reason;
    public function definedProperties(): array
    {
        return ['reason' => 'reason'];
    }
}