<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SocialMediaLoginProfileSocialMediaLoginProfile
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
     * @var bool
     */
    protected $linkedinEnabled;
    /**
     * @var string
     */
    protected $linkedinClientId;
    /**
     * @var string
     */
    protected $linkedinSecret;
    /**
     * @var bool
     */
    protected $googleEnabled;
    /**
     * @var string
     */
    protected $googleClientId;
    /**
     * @var string
     */
    protected $googleSecret;
    /**
     * @var bool
     */
    protected $microsoftEnabled;
    /**
     * @var string
     */
    protected $microsoftClientId;
    /**
     * @var string
     */
    protected $microsoftSecret;
    /**
     * @var bool
     */
    protected $facebookEnabled;
    /**
     * @var string
     */
    protected $facebookClientId;
    /**
     * @var string
     */
    protected $facebookSecret;
    /**
     * @var list<SocialMediaLoginProfileWhitelistedDomain>
     */
    protected $whitelistedDomains;
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
     * @return bool
     */
    public function getLinkedinEnabled(): bool
    {
        return $this->linkedinEnabled;
    }
    /**
     * @param bool $linkedinEnabled
     *
     * @return self
     */
    public function setLinkedinEnabled(bool $linkedinEnabled): self
    {
        $this->initialized['linkedinEnabled'] = true;
        $this->linkedinEnabled = $linkedinEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getLinkedinClientId(): string
    {
        return $this->linkedinClientId;
    }
    /**
     * @param string $linkedinClientId
     *
     * @return self
     */
    public function setLinkedinClientId(string $linkedinClientId): self
    {
        $this->initialized['linkedinClientId'] = true;
        $this->linkedinClientId = $linkedinClientId;
        return $this;
    }
    /**
     * @return string
     */
    public function getLinkedinSecret(): string
    {
        return $this->linkedinSecret;
    }
    /**
     * @param string $linkedinSecret
     *
     * @return self
     */
    public function setLinkedinSecret(string $linkedinSecret): self
    {
        $this->initialized['linkedinSecret'] = true;
        $this->linkedinSecret = $linkedinSecret;
        return $this;
    }
    /**
     * @return bool
     */
    public function getGoogleEnabled(): bool
    {
        return $this->googleEnabled;
    }
    /**
     * @param bool $googleEnabled
     *
     * @return self
     */
    public function setGoogleEnabled(bool $googleEnabled): self
    {
        $this->initialized['googleEnabled'] = true;
        $this->googleEnabled = $googleEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getGoogleClientId(): string
    {
        return $this->googleClientId;
    }
    /**
     * @param string $googleClientId
     *
     * @return self
     */
    public function setGoogleClientId(string $googleClientId): self
    {
        $this->initialized['googleClientId'] = true;
        $this->googleClientId = $googleClientId;
        return $this;
    }
    /**
     * @return string
     */
    public function getGoogleSecret(): string
    {
        return $this->googleSecret;
    }
    /**
     * @param string $googleSecret
     *
     * @return self
     */
    public function setGoogleSecret(string $googleSecret): self
    {
        $this->initialized['googleSecret'] = true;
        $this->googleSecret = $googleSecret;
        return $this;
    }
    /**
     * @return bool
     */
    public function getMicrosoftEnabled(): bool
    {
        return $this->microsoftEnabled;
    }
    /**
     * @param bool $microsoftEnabled
     *
     * @return self
     */
    public function setMicrosoftEnabled(bool $microsoftEnabled): self
    {
        $this->initialized['microsoftEnabled'] = true;
        $this->microsoftEnabled = $microsoftEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getMicrosoftClientId(): string
    {
        return $this->microsoftClientId;
    }
    /**
     * @param string $microsoftClientId
     *
     * @return self
     */
    public function setMicrosoftClientId(string $microsoftClientId): self
    {
        $this->initialized['microsoftClientId'] = true;
        $this->microsoftClientId = $microsoftClientId;
        return $this;
    }
    /**
     * @return string
     */
    public function getMicrosoftSecret(): string
    {
        return $this->microsoftSecret;
    }
    /**
     * @param string $microsoftSecret
     *
     * @return self
     */
    public function setMicrosoftSecret(string $microsoftSecret): self
    {
        $this->initialized['microsoftSecret'] = true;
        $this->microsoftSecret = $microsoftSecret;
        return $this;
    }
    /**
     * @return bool
     */
    public function getFacebookEnabled(): bool
    {
        return $this->facebookEnabled;
    }
    /**
     * @param bool $facebookEnabled
     *
     * @return self
     */
    public function setFacebookEnabled(bool $facebookEnabled): self
    {
        $this->initialized['facebookEnabled'] = true;
        $this->facebookEnabled = $facebookEnabled;
        return $this;
    }
    /**
     * @return string
     */
    public function getFacebookClientId(): string
    {
        return $this->facebookClientId;
    }
    /**
     * @param string $facebookClientId
     *
     * @return self
     */
    public function setFacebookClientId(string $facebookClientId): self
    {
        $this->initialized['facebookClientId'] = true;
        $this->facebookClientId = $facebookClientId;
        return $this;
    }
    /**
     * @return string
     */
    public function getFacebookSecret(): string
    {
        return $this->facebookSecret;
    }
    /**
     * @param string $facebookSecret
     *
     * @return self
     */
    public function setFacebookSecret(string $facebookSecret): self
    {
        $this->initialized['facebookSecret'] = true;
        $this->facebookSecret = $facebookSecret;
        return $this;
    }
    /**
     * @return list<SocialMediaLoginProfileWhitelistedDomain>
     */
    public function getWhitelistedDomains(): array
    {
        return $this->whitelistedDomains;
    }
    /**
     * @param list<SocialMediaLoginProfileWhitelistedDomain> $whitelistedDomains
     *
     * @return self
     */
    public function setWhitelistedDomains(array $whitelistedDomains): self
    {
        $this->initialized['whitelistedDomains'] = true;
        $this->whitelistedDomains = $whitelistedDomains;
        return $this;
    }
}