<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Grant implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of the bucket.
     *
     * @var string
     */
    public string $bucket;
    /**
     * The permission to grant to the user. Possible values are `read`, `readwrite`, `fullaccess`, or an empty string.
     *
     * @var string
     */
    public string $permission;
    public function definedProperties(): array
    {
        return ['bucket' => 'bucket', 'permission' => 'permission'];
    }
}