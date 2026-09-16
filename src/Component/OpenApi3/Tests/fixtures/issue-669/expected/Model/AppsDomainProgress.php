<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDomainProgress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<iterable<string, mixed>>
     */
    public array $steps;
    public function definedProperties(): array
    {
        return ['steps' => 'steps'];
    }
}