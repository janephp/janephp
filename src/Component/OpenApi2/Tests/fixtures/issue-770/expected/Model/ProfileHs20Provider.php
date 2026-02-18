<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileHs20Provider
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
     * Identifier of the Hotspot 2.0 identity provider profile
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
     * Realms
     *
     * @var list<ProfileProviderRealm>
     */
    protected $realms;
    /**
     * PLMNs
     *
     * @var list<ProfileProviderPLMN>
     */
    protected $plmns;
    /**
     * Home OIs
     *
     * @var list<ProfileProviderHomeOIs>
     */
    protected $homeOis;
    /**
     * Authentications
     *
     * @var list<ProfileProviderAuthentication>
     */
    protected $authentications;
    /**
     * Accountings
     *
     * @var list<ProfileProviderAccounting>
     */
    protected $accountings;
    /**
     * @var ProfileProviderOnlineSignup
     */
    protected $osu;
    /**
     * Domain Id
     *
     * @var string
     */
    protected $domainId;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    protected $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    protected $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    protected $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    protected $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    protected $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    protected $modifierUsername;
    /**
     * Identifier of the Hotspot 2.0 identity provider profile
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the Hotspot 2.0 identity provider profile
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
     * Realms
     *
     * @return list<ProfileProviderRealm>
     */
    public function getRealms(): array
    {
        return $this->realms;
    }
    /**
     * Realms
     *
     * @param list<ProfileProviderRealm> $realms
     *
     * @return self
     */
    public function setRealms(array $realms): self
    {
        $this->initialized['realms'] = true;
        $this->realms = $realms;
        return $this;
    }
    /**
     * PLMNs
     *
     * @return list<ProfileProviderPLMN>
     */
    public function getPlmns(): array
    {
        return $this->plmns;
    }
    /**
     * PLMNs
     *
     * @param list<ProfileProviderPLMN> $plmns
     *
     * @return self
     */
    public function setPlmns(array $plmns): self
    {
        $this->initialized['plmns'] = true;
        $this->plmns = $plmns;
        return $this;
    }
    /**
     * Home OIs
     *
     * @return list<ProfileProviderHomeOIs>
     */
    public function getHomeOis(): array
    {
        return $this->homeOis;
    }
    /**
     * Home OIs
     *
     * @param list<ProfileProviderHomeOIs> $homeOis
     *
     * @return self
     */
    public function setHomeOis(array $homeOis): self
    {
        $this->initialized['homeOis'] = true;
        $this->homeOis = $homeOis;
        return $this;
    }
    /**
     * Authentications
     *
     * @return list<ProfileProviderAuthentication>
     */
    public function getAuthentications(): array
    {
        return $this->authentications;
    }
    /**
     * Authentications
     *
     * @param list<ProfileProviderAuthentication> $authentications
     *
     * @return self
     */
    public function setAuthentications(array $authentications): self
    {
        $this->initialized['authentications'] = true;
        $this->authentications = $authentications;
        return $this;
    }
    /**
     * Accountings
     *
     * @return list<ProfileProviderAccounting>
     */
    public function getAccountings(): array
    {
        return $this->accountings;
    }
    /**
     * Accountings
     *
     * @param list<ProfileProviderAccounting> $accountings
     *
     * @return self
     */
    public function setAccountings(array $accountings): self
    {
        $this->initialized['accountings'] = true;
        $this->accountings = $accountings;
        return $this;
    }
    /**
     * @return ProfileProviderOnlineSignup
     */
    public function getOsu(): ProfileProviderOnlineSignup
    {
        return $this->osu;
    }
    /**
     * @param ProfileProviderOnlineSignup $osu
     *
     * @return self
     */
    public function setOsu(ProfileProviderOnlineSignup $osu): self
    {
        $this->initialized['osu'] = true;
        $this->osu = $osu;
        return $this;
    }
    /**
     * Domain Id
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Domain Id
     *
     * @param string $domainId
     *
     * @return self
     */
    public function setDomainId(string $domainId): self
    {
        $this->initialized['domainId'] = true;
        $this->domainId = $domainId;
        return $this;
    }
    /**
     * Timestamp of being created
     *
     * @return int
     */
    public function getCreateDateTime(): int
    {
        return $this->createDateTime;
    }
    /**
     * Timestamp of being created
     *
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
     * Timestamp of being modified
     *
     * @return int
     */
    public function getModifiedDateTime(): int
    {
        return $this->modifiedDateTime;
    }
    /**
     * Timestamp of being modified
     *
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
     * Creator ID
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creatorId;
    }
    /**
     * Creator ID
     *
     * @param string $creatorId
     *
     * @return self
     */
    public function setCreatorId(string $creatorId): self
    {
        $this->initialized['creatorId'] = true;
        $this->creatorId = $creatorId;
        return $this;
    }
    /**
     * Modifier ID
     *
     * @return string
     */
    public function getModifierId(): string
    {
        return $this->modifierId;
    }
    /**
     * Modifier ID
     *
     * @param string $modifierId
     *
     * @return self
     */
    public function setModifierId(string $modifierId): self
    {
        $this->initialized['modifierId'] = true;
        $this->modifierId = $modifierId;
        return $this;
    }
    /**
     * Creator Name
     *
     * @return string
     */
    public function getCreatorUsername(): string
    {
        return $this->creatorUsername;
    }
    /**
     * Creator Name
     *
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
     * Modifier Name
     *
     * @return string
     */
    public function getModifierUsername(): string
    {
        return $this->modifierUsername;
    }
    /**
     * Modifier Name
     *
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