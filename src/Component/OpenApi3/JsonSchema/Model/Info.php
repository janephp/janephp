<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Info extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $termsOfService;
    /**
     * 
     *
     * @var Contact|null
     */
    protected $contact;
    /**
     * 
     *
     * @var License|null
     */
    protected $license;
    /**
     * 
     *
     * @var string|null
     */
    protected $version;
    /**
     * 
     *
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTermsOfService() : ?string
    {
        return $this->termsOfService;
    }
    /**
     * 
     *
     * @param string|null $termsOfService
     *
     * @return self
     */
    public function setTermsOfService(?string $termsOfService) : self
    {
        $this->initialized['termsOfService'] = true;
        $this->termsOfService = $termsOfService;
        return $this;
    }
    /**
     * 
     *
     * @return Contact|null
     */
    public function getContact() : ?Contact
    {
        return $this->contact;
    }
    /**
     * 
     *
     * @param Contact|null $contact
     *
     * @return self
     */
    public function setContact(?Contact $contact) : self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return License|null
     */
    public function getLicense() : ?License
    {
        return $this->license;
    }
    /**
     * 
     *
     * @param License|null $license
     *
     * @return self
     */
    public function setLicense(?License $license) : self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVersion() : ?string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string|null $version
     *
     * @return self
     */
    public function setVersion(?string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}