<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseNewCertificate implements AdditionalPropertiesInterface
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
     * @var Certificate
     */
    protected $certificate;
    /**
     * @return Certificate
     */
    public function getCertificate(): Certificate
    {
        return $this->certificate;
    }
    /**
     * @param Certificate $certificate
     *
     * @return self
     */
    public function setCertificate(Certificate $certificate): self
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