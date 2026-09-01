<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseExistingCheckState implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var State
     */
    public State $state;
    public function definedProperties(): array
    {
        return ['state' => 'state'];
    }
}