<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Ca implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * base64 encoding of the certificate used to secure database connections
     *
     * @var string
     */
    public string $certificate;
    public function definedProperties(): array
    {
        return ['certificate' => 'certificate'];
    }
}