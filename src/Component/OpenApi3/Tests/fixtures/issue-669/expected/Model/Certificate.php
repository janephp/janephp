<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Certificate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A unique ID that can be used to identify and reference a certificate.
     *
     * @var string
     */
    public string $id;
    /**
     * A unique human-readable name referring to a certificate.
     *
     * @var string
     */
    public string $name;
    /**
     * A time value given in ISO8601 combined date and time format that represents the certificate's expiration date.
     *
     * @var \DateTime
     */
    public \DateTime $notAfter;
    /**
     * A unique identifier generated from the SHA-1 fingerprint of the certificate.
     *
     * @var string
     */
    public string $sha1Fingerprint;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the certificate was created.
     *
     * @var \DateTime
     */
    public \DateTime $createdAt;
    /**
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued.
     *
     * @var list<string>
     */
    public array $dnsNames;
    /**
     * A string representing the current state of the certificate. It may be `pending`, `verified`, or `error`.
     *
     * @var string
     */
    public string $state;
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['id' => 'id', 'name' => 'name', 'notAfter' => 'not_after', 'sha1Fingerprint' => 'sha1_fingerprint', 'createdAt' => 'created_at', 'dnsNames' => 'dns_names', 'state' => 'state', 'type' => 'type'];
    }
}