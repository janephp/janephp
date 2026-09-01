<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseTriggerResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var TriggerInfo
     */
    public TriggerInfo $trigger;
    public function definedProperties(): array
    {
        return ['trigger' => 'trigger'];
    }
}