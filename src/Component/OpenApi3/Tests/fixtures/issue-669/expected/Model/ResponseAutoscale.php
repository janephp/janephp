<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseAutoscale implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Contains all autoscaling configuration for a database cluster
     *
     * @var DatabaseAutoscaleParams
     */
    public DatabaseAutoscaleParams $autoscale;
    public function definedProperties(): array
    {
        return ['autoscale' => 'autoscale'];
    }
}