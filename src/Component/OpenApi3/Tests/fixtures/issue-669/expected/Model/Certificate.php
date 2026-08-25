<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Certificate implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A unique ID that can be used to identify and reference a certificate.
     *
     * @var string
     */
    protected $id;
    /**
     * A unique human-readable name referring to a certificate.
     *
     * @var string
     */
    protected $name;
    /**
     * A time value given in ISO8601 combined date and time format that represents the certificate's expiration date.
     *
     * @var \DateTime
     */
    protected $notAfter;
    /**
     * A unique identifier generated from the SHA-1 fingerprint of the certificate.
     *
     * @var string
     */
    protected $sha1Fingerprint;
    /**
     * A time value given in ISO8601 combined date and time format that represents when the certificate was created.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued.
     *
     * @var list<string>
     */
    protected $dnsNames;
    /**
     * A string representing the current state of the certificate. It may be `pending`, `verified`, or `error`.
     *
     * @var string
     */
    protected $state;
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @var string
     */
    protected $type;
    /**
     * A unique ID that can be used to identify and reference a certificate.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * A unique ID that can be used to identify and reference a certificate.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * A unique human-readable name referring to a certificate.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A unique human-readable name referring to a certificate.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents the certificate's expiration date.
     *
     * @return \DateTime
     */
    public function getNotAfter(): \DateTime
    {
        return $this->notAfter;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents the certificate's expiration date.
     *
     * @param \DateTime $notAfter
     *
     * @return self
     */
    public function setNotAfter(\DateTime $notAfter): self
    {
        $this->initialized['notAfter'] = true;
        $this->notAfter = $notAfter;
        return $this;
    }
    /**
     * A unique identifier generated from the SHA-1 fingerprint of the certificate.
     *
     * @return string
     */
    public function getSha1Fingerprint(): string
    {
        return $this->sha1Fingerprint;
    }
    /**
     * A unique identifier generated from the SHA-1 fingerprint of the certificate.
     *
     * @param string $sha1Fingerprint
     *
     * @return self
     */
    public function setSha1Fingerprint(string $sha1Fingerprint): self
    {
        $this->initialized['sha1Fingerprint'] = true;
        $this->sha1Fingerprint = $sha1Fingerprint;
        return $this;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the certificate was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A time value given in ISO8601 combined date and time format that represents when the certificate was created.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued.
     *
     * @return list<string>
     */
    public function getDnsNames(): array
    {
        return $this->dnsNames;
    }
    /**
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued.
     *
     * @param list<string> $dnsNames
     *
     * @return self
     */
    public function setDnsNames(array $dnsNames): self
    {
        $this->initialized['dnsNames'] = true;
        $this->dnsNames = $dnsNames;
        return $this;
    }
    /**
     * A string representing the current state of the certificate. It may be `pending`, `verified`, or `error`.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * A string representing the current state of the certificate. It may be `pending`, `verified`, or `error`.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'notAfter' => ['not_after', 'getNotAfter', 'setNotAfter'], 'sha1Fingerprint' => ['sha1_fingerprint', 'getSha1Fingerprint', 'setSha1Fingerprint'], 'createdAt' => ['created_at', 'getCreatedAt', 'setCreatedAt'], 'dnsNames' => ['dns_names', 'getDnsNames', 'setDnsNames'], 'state' => ['state', 'getState', 'setState'], 'type' => ['type', 'getType', 'setType']];
    }
}