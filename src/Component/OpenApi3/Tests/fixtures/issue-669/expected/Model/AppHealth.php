<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppHealth implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<AppComponentHealth>
     */
    public array $components;
    /**
     * @var list<AppFunctionsComponentHealth>
     */
    public array $functionsComponents;
    public function definedProperties(): array
    {
        return ['components' => 'components', 'functionsComponents' => 'functions_components'];
    }
}