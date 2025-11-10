<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateServiceCertificate
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * the service
     *
     * @var string
     */
    protected $service;
    /**
     * @var CommonGenericRef
     */
    protected $certificate;
    /**
     * the service
     *
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }
    /**
     * the service
     *
     * @param string $service
     *
     * @return self
     */
    public function setService(string $service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getCertificate(): CommonGenericRef
    {
        return $this->certificate;
    }
    /**
     * @param CommonGenericRef $certificate
     *
     * @return self
     */
    public function setCertificate(CommonGenericRef $certificate): self
    {
        $this->initialized['certificate'] = true;
        $this->certificate = $certificate;
        return $this;
    }
}