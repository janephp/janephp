<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCreateCert
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var string
     */
    protected $data;
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var list<string>
     */
    protected $intermediateData;
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var string
     */
    protected $rootData;
    /**
     * Incompatible with certificasSigningRequest. Must choose one to enter. The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @var string
     */
    protected $privateKeyData;
    /**
     * @var CommonGenericRef
     */
    protected $certificasSigningRequest;
    /**
     * Key passphrase
     *
     * @var string
     */
    protected $passphrase;
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @return list<string>
     */
    public function getIntermediateData(): array
    {
        return $this->intermediateData;
    }
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @param list<string> $intermediateData
     *
     * @return self
     */
    public function setIntermediateData(array $intermediateData): self
    {
        $this->initialized['intermediateData'] = true;
        $this->intermediateData = $intermediateData;
        return $this;
    }
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @return string
     */
    public function getRootData(): string
    {
        return $this->rootData;
    }
    /**
     * The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @param string $rootData
     *
     * @return self
     */
    public function setRootData(string $rootData): self
    {
        $this->initialized['rootData'] = true;
        $this->rootData = $rootData;
        return $this;
    }
    /**
     * Incompatible with certificasSigningRequest. Must choose one to enter. The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @return string
     */
    public function getPrivateKeyData(): string
    {
        return $this->privateKeyData;
    }
    /**
     * Incompatible with certificasSigningRequest. Must choose one to enter. The value must be in PEM format which is a Base64 encoded DER certificate.
     *
     * @param string $privateKeyData
     *
     * @return self
     */
    public function setPrivateKeyData(string $privateKeyData): self
    {
        $this->initialized['privateKeyData'] = true;
        $this->privateKeyData = $privateKeyData;
        return $this;
    }
    /**
     * @return CommonGenericRef
     */
    public function getCertificasSigningRequest(): CommonGenericRef
    {
        return $this->certificasSigningRequest;
    }
    /**
     * @param CommonGenericRef $certificasSigningRequest
     *
     * @return self
     */
    public function setCertificasSigningRequest(CommonGenericRef $certificasSigningRequest): self
    {
        $this->initialized['certificasSigningRequest'] = true;
        $this->certificasSigningRequest = $certificasSigningRequest;
        return $this;
    }
    /**
     * Key passphrase
     *
     * @return string
     */
    public function getPassphrase(): string
    {
        return $this->passphrase;
    }
    /**
     * Key passphrase
     *
     * @param string $passphrase
     *
     * @return self
     */
    public function setPassphrase(string $passphrase): self
    {
        $this->initialized['passphrase'] = true;
        $this->passphrase = $passphrase;
        return $this;
    }
}