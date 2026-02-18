<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfo
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
     * @var string
     */
    protected $zoneId;
    /**
     * @var int
     */
    protected $createDateTime;
    /**
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * @var string
     */
    protected $creatorUsername;
    /**
     * @var string
     */
    protected $modifierUsername;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
    /**
     * @return string
     */
    public function getZoneId(): string
    {
        return $this->zoneId;
    }
    /**
     * @param string $zoneId
     *
     * @return self
     */
    public function setZoneId(string $zoneId): self
    {
        $this->initialized['zoneId'] = true;
        $this->zoneId = $zoneId;
        return $this;
    }
    /**
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * @param int $createDateTime
     *
     * @return self
     */
    public function setCreateDateTime(int $createDateTime): self
    {
        $this->initialized['createDateTime'] = true;
        $this->createDateTime = $createDateTime;
        return $this;
    }
    /**
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * @param int $modifiedDateTime
     *
     * @return self
     */
    public function setModifiedDateTime(int $modifiedDateTime): self
    {
        $this->initialized['modifiedDateTime'] = true;
        $this->modifiedDateTime = $modifiedDateTime;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * @param string $creatorUsername
     *
     * @return self
     */
    public function setCreatorUsername(string $creatorUsername): self
    {
        $this->initialized['creatorUsername'] = true;
        $this->creatorUsername = $creatorUsername;
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
}