<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Issue1007\Model;

use Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Issue1007\Runtime\AdditionalPropertiesInterface;
class AbsentAdditionalPropertiesSchema implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $name;
    public function definedProperties(): array
    {
        return ['name' => 'name'];
    }
}