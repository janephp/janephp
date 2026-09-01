<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppsDedicatedEgressIp implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $ip;
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $status = 'UNKNOWN';
    public function definedProperties(): array
    {
        return ['ip' => 'ip', 'id' => 'id', 'status' => 'status'];
    }
}