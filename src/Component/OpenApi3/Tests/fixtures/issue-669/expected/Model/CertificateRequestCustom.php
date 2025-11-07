<?php

namespace Jane\Generated\DigitalOcean\Model;

class CertificateRequestCustom extends \ArrayObject
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
     * A unique human-readable name referring to a certificate.
     *
     * @var string
     */
    protected $name;
    /**
     * A string representing the type of the certificate. The value will be `custom` for a user-uploaded certificate or `lets_encrypt` for one automatically generated with Let's Encrypt.
     *
     * @var string
     */
    protected $type;
    /**
     * The contents of a PEM-formatted private-key corresponding to the SSL certificate.
     *
     * @var string
     */
    protected $privateKey;
    /**
     * The contents of a PEM-formatted public SSL certificate.
     *
     * @var string
     */
    protected $leafCertificate;
    /**
     * The full PEM-formatted trust chain between the certificate authority's certificate and your domain's SSL certificate.
     *
     * @var string
     */
    protected $certificateChain;
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
    /**
     * The contents of a PEM-formatted private-key corresponding to the SSL certificate.
     *
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->privateKey;
    }
    /**
     * The contents of a PEM-formatted private-key corresponding to the SSL certificate.
     *
     * @param string $privateKey
     *
     * @return self
     */
    public function setPrivateKey(string $privateKey): self
    {
        $this->initialized['privateKey'] = true;
        $this->privateKey = $privateKey;
        return $this;
    }
    /**
     * The contents of a PEM-formatted public SSL certificate.
     *
     * @return string
     */
    public function getLeafCertificate(): string
    {
        return $this->leafCertificate;
    }
    /**
     * The contents of a PEM-formatted public SSL certificate.
     *
     * @param string $leafCertificate
     *
     * @return self
     */
    public function setLeafCertificate(string $leafCertificate): self
    {
        $this->initialized['leafCertificate'] = true;
        $this->leafCertificate = $leafCertificate;
        return $this;
    }
    /**
     * The full PEM-formatted trust chain between the certificate authority's certificate and your domain's SSL certificate.
     *
     * @return string
     */
    public function getCertificateChain(): string
    {
        return $this->certificateChain;
    }
    /**
     * The full PEM-formatted trust chain between the certificate authority's certificate and your domain's SSL certificate.
     *
     * @param string $certificateChain
     *
     * @return self
     */
    public function setCertificateChain(string $certificateChain): self
    {
        $this->initialized['certificateChain'] = true;
        $this->certificateChain = $certificateChain;
        return $this;
    }
}