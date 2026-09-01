<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseByoipPrefixCreate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The unique identifier for the BYOIP prefix
     *
     * @var string
     */
    public string $uuid;
    /**
     * The region where the prefix is created
     *
     * @var string
     */
    public string $region;
    /**
     * The status of the BYOIP prefix
     *
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['uuid' => 'uuid', 'region' => 'region', 'status' => 'status'];
    }
}