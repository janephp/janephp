<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCertSetting
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
     * Certificate Setting of the service
     *
     * @var list<CertificateServiceCertificate>
     */
    protected $serviceCertificates;
    /**
     * Certificate Setting of the service
     *
     * @return list<CertificateServiceCertificate>
     */
    public function getServiceCertificates(): array
    {
        return $this->serviceCertificates;
    }
    /**
     * Certificate Setting of the service
     *
     * @param list<CertificateServiceCertificate> $serviceCertificates
     *
     * @return self
     */
    public function setServiceCertificates(array $serviceCertificates): self
    {
        $this->initialized['serviceCertificates'] = true;
        $this->serviceCertificates = $serviceCertificates;
        return $this;
    }
}