<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ByoipPrefixCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The IP prefix in CIDR notation to bring
     *
     * @var string
     */
    public string $prefix;
    /**
     * The region where the prefix will be created
     *
     * @var string
     */
    public string $region;
    /**
     * The signature hash for the prefix creation request
     *
     * @var string
     */
    public string $signature;
    public function definedProperties(): array
    {
        return ['prefix' => 'prefix', 'region' => 'region', 'signature' => 'signature'];
    }
}