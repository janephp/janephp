<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiUpdateAgentFunctionOutput implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * An Agent
     *
     * @var ApiAgent
     */
    public ApiAgent $agent;
    public function definedProperties(): array
    {
        return ['agent' => 'agent'];
    }
}