<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class CertificateCreateBase implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique human-readable name referring to a certificate.
     *
     * @var string
     */
    public string $name;
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'type' => 'type'];
    }
}