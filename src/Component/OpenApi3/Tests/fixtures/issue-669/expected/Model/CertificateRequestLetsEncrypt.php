<?php

namespace Jane\Generated\DigitalOcean\Model;

class CertificateRequestLetsEncrypt extends \ArrayObject
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
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued. A certificate covering all subdomains can be issued using a wildcard (e.g. `*.example.com`).
     *
     * @var list<string>
     */
    protected $dnsNames;
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
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued. A certificate covering all subdomains can be issued using a wildcard (e.g. `*.example.com`).
     *
     * @return list<string>
     */
    public function getDnsNames(): array
    {
        return $this->dnsNames;
    }
    /**
     * An array of fully qualified domain names (FQDNs) for which the certificate was issued. A certificate covering all subdomains can be issued using a wildcard (e.g. `*.example.com`).
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
}