<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateTrustedCAChainCertListListItem
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
     * Identifier of the trusted CA chain certificate
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
     * @var string
     */
    protected $modifierUsername;
    /**
     * @var string
     */
    protected $modifiedDateTime;
    /**
     * Information of the certificates
     *
     * @var string
     */
    protected $information;
    /**
     * Intermediate data of the trusted CA chain certificates
     *
     * @var list<string>
     */
    protected $interCertData;
    /**
     * Root data of the trusted CA chain certificates
     *
     * @var string
     */
    protected $rootCertData;
    /**
     * Identifier of the trusted CA chain certificate
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the trusted CA chain certificate
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
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * @param string $modifierUsername
     *
     * @return self
     */
    public function setModifierUsername(string $modifierUsername): self
    {
        $this->initialized['modifierUsername'] = true;
        $this->modifierUsername = $modifierUsername;
        return $this;
    }
    /**
     * @return string
     */
    public function getModifiedDateTime(): string
    {
        return $this->modifiedDateTime;
    }
    /**
     * @param string $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(string $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * Information of the certificates
     *
     * @return string
     */
    public function getInformation(): string
    {
        return $this->information;
    }
    /**
     * Information of the certificates
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
     * Intermediate data of the trusted CA chain certificates
     *
     * @return list<string>
     */
    public function getInterCertData(): array
    {
        return $this->interCertData;
    }
    /**
     * Intermediate data of the trusted CA chain certificates
     *
     * @param list<string> $interCertData
     *
     * @return self
     */
    public function setInterCertData(array $interCertData): self
    {
        $this->initialized['interCertData'] = true;
        $this->interCertData = $interCertData;
        return $this;
    }
    /**
     * Root data of the trusted CA chain certificates
     *
     * @return string
     */
    public function getRootCertData(): string
    {
        return $this->rootCertData;
    }
    /**
     * Root data of the trusted CA chain certificates
     *
     * @param string $rootCertData
     *
     * @return self
     */
    public function setRootCertData(string $rootCertData): self
    {
        $this->initialized['rootCertData'] = true;
        $this->rootCertData = $rootCertData;
        return $this;
    }
}