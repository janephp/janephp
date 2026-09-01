<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpAction implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var ResponseReservedIpActionAction
     */
    public ResponseReservedIpActionAction $action;
    public function definedProperties(): array
    {
        return ['action' => 'action'];
    }
}