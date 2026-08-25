<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class Ca implements AdditionalPropertiesInterface
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
     * base64 encoding of the certificate used to secure database connections
     *
     * @var string
     */
    protected $certificate;
    /**
     * base64 encoding of the certificate used to secure database connections
     *
     * @return string
     */
    public function getCertificate(): string
    {
        return $this->certificate;
    }
    /**
     * base64 encoding of the certificate used to secure database connections
     *
     * @param string $certificate
     *
     * @return self
     */
    public function setCertificate(string $certificate): self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['certificate' => ['certificate', 'getCertificate', 'setCertificate']];
    }
}