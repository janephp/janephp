<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class CertificateCertificatesSigningRequest
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
     * Identifier of the certificates signing request
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
     * Common name of the certificates signing request
     *
     * @var string
     */
    protected $commonName;
    /**
     * Email of the certificates signing request
     *
     * @var string
     */
    protected $email;
    /**
     * Organization of the certificates signing request
     *
     * @var string
     */
    protected $organization;
    /**
     * Organization unit of the certificates signing request
     *
     * @var string
     */
    protected $organizationUnit;
    /**
     * City of the certificates signing request
     *
     * @var string
     */
    protected $city;
    /**
     * State of the certificates signing request
     *
     * @var string
     */
    protected $state;
    /**
     * Country code of the certificates signing request
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Identifier of the certificates signing request
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the certificates signing request
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
     * Common name of the certificates signing request
     *
     * @return string
     */
    public function getCommonName(): string
    {
        return $this->commonName;
    }
    /**
     * Common name of the certificates signing request
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName): self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
        return $this;
    }
    /**
     * Email of the certificates signing request
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Email of the certificates signing request
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Organization of the certificates signing request
     *
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }
    /**
     * Organization of the certificates signing request
     *
     * @param string $organization
     *
     * @return self
     */
    public function setOrganization(string $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
     * Organization unit of the certificates signing request
     *
     * @return string
     */
    public function getOrganizationUnit(): string
    {
        return $this->organizationUnit;
    }
    /**
     * Organization unit of the certificates signing request
     *
     * @param string $organizationUnit
     *
     * @return self
     */
    public function setOrganizationUnit(string $organizationUnit): self
    {
        $this->initialized['organizationUnit'] = true;
        $this->organizationUnit = $organizationUnit;
        return $this;
    }
    /**
     * City of the certificates signing request
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City of the certificates signing request
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * State of the certificates signing request
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State of the certificates signing request
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
     * Country code of the certificates signing request
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Country code of the certificates signing request
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}