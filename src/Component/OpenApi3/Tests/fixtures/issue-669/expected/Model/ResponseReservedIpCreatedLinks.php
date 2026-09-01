<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseReservedIpCreatedLinks implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ActionLink>
     */
    public array $droplets;
    /**
     * @var list<ActionLink>
     */
    public array $actions;
    public function definedProperties(): array
    {
        return ['droplets' => 'droplets', 'actions' => 'actions'];
    }
}