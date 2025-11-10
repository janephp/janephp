<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateClientCert
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
     * Identifier of the client certificate
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * Data of the client certificate
     *
     * @var string
     */
    protected $data;
    /**
     * Information of the client certificate
     *
     * @var string
     */
    protected $information;
    /**
     * Intermediate data of the client certificate
     *
     * @var list<string>
     */
    protected $intermediateData;
    /**
     * Root data of the client certificate
     *
     * @var string
     */
    protected $rootData;
    /**
     * Private key data of the client certificate
     *
     * @var string
     */
    protected $privateKeyData;
    /**
     * Public key data of the client certificate
     *
     * @var string
     */
    protected $publicKey;
    /**
     * Identifier of the client certificate
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the client certificate
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
     * Data of the client certificate
     *
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }
    /**
     * Data of the client certificate
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
     * Information of the client certificate
     *
     * @return string
     */
    public function getInformation(): string
    {
        return $this->information;
    }
    /**
     * Information of the client certificate
     *
     * @param string $information
     *
     * @return self
     */
    public function setInformation(string $information): self
    {
        $this->initialized['information'] = true;
        $this->information = $information;
        return $this;
    }
    /**
     * Intermediate data of the client certificate
     *
     * @return list<string>
     */
    public function getIntermediateData(): array
    {
        return $this->intermediateData;
    }
    /**
     * Intermediate data of the client certificate
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
     * Root data of the client certificate
     *
     * @return string
     */
    public function getRootData(): string
    {
        return $this->rootData;
    }
    /**
     * Root data of the client certificate
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
     * Private key data of the client certificate
     *
     * @return string
     */
    public function getPrivateKeyData(): string
    {
        return $this->privateKeyData;
    }
    /**
     * Private key data of the client certificate
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
     * Public key data of the client certificate
     *
     * @return string
     */
    public function getPublicKey(): string
    {
        return $this->publicKey;
    }
    /**
     * Public key data of the client certificate
     *
     * @param string $publicKey
     *
     * @return self
     */
    public function setPublicKey(string $publicKey): self
    {
        $this->initialized['publicKey'] = true;
        $this->publicKey = $publicKey;
        return $this;
    }
}