<?php

namespace Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Model;

use Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\NoOperationIdWithDotPath\Runtime\AdditionalPropertiesInterface;
class MessageM700PostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $bar;
    public function definedProperties(): array
    {
        return ['bar' => 'bar'];
    }
}