<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseOpensearchIndexes implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<array<string, mixed>>
     */
    public array $indexes;
    public function definedProperties(): array
    {
        return ['indexes' => 'indexes'];
    }
}