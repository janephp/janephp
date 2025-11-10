<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ProfileProviderExternalOSU
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
     * Provisioning protocal
     *
     * @var list<string>
     */
    protected $provisioningProtocals;
    /**
     * @var string
     */
    protected $osuServiceUrl;
    /**
     * Online signup NAI realm, it should be one of realm as defined in Hotspot 2.0 identity provider
     *
     * @var string
     */
    protected $osuNaiRealm;
    /**
     * @var string
     */
    protected $singleSsidNai;
    /**
     * The base64 encoded data of icon.
     *
     * @var string
     */
    protected $commonLanguageIcon;
    /**
     * Subscription descriptions
     *
     * @var list<ProfileProviderSubscriptionDescription>
     */
    protected $subscriptionDescriptions;
    /**
     * Whitelisted domains
     *
     * @var list<string>
     */
    protected $whitelistedDomains;
    /**
     * Provisioning protocal
     *
     * @return list<string>
     */
    public function getProvisioningProtocals(): array
    {
        return $this->provisioningProtocals;
    }
    /**
     * Provisioning protocal
     *
     * @param list<string> $provisioningProtocals
     *
     * @return self
     */
    public function setProvisioningProtocals(array $provisioningProtocals): self
    {
        $this->initialized['provisioningProtocals'] = true;
        $this->provisioningProtocals = $provisioningProtocals;
        return $this;
    }
    /**
     * @return string
     */
    public function getOsuServiceUrl(): string
    {
        return $this->osuServiceUrl;
    }
    /**
     * @param string $osuServiceUrl
     *
     * @return self
     */
    public function setOsuServiceUrl(string $osuServiceUrl): self
    {
        $this->initialized['osuServiceUrl'] = true;
        $this->osuServiceUrl = $osuServiceUrl;
        return $this;
    }
    /**
     * Online signup NAI realm, it should be one of realm as defined in Hotspot 2.0 identity provider
     *
     * @return string
     */
    public function getOsuNaiRealm(): string
    {
        return $this->osuNaiRealm;
    }
    /**
     * Online signup NAI realm, it should be one of realm as defined in Hotspot 2.0 identity provider
     *
     * @param string $osuNaiRealm
     *
     * @return self
     */
    public function setOsuNaiRealm(string $osuNaiRealm): self
    {
        $this->initialized['osuNaiRealm'] = true;
        $this->osuNaiRealm = $osuNaiRealm;
        return $this;
    }
    /**
     * @return string
     */
    public function getSingleSsidNai(): string
    {
        return $this->singleSsidNai;
    }
    /**
     * @param string $singleSsidNai
     *
     * @return self
     */
    public function setSingleSsidNai(string $singleSsidNai): self
    {
        $this->initialized['singleSsidNai'] = true;
        $this->singleSsidNai = $singleSsidNai;
        return $this;
    }
    /**
     * The base64 encoded data of icon.
     *
     * @return string
     */
    public function getCommonLanguageIcon(): string
    {
        return $this->commonLanguageIcon;
    }
    /**
     * The base64 encoded data of icon.
     *
     * @param string $commonLanguageIcon
     *
     * @return self
     */
    public function setCommonLanguageIcon(string $commonLanguageIcon): self
    {
        $this->initialized['commonLanguageIcon'] = true;
        $this->commonLanguageIcon = $commonLanguageIcon;
        return $this;
    }
    /**
     * Subscription descriptions
     *
     * @return list<ProfileProviderSubscriptionDescription>
     */
    public function getSubscriptionDescriptions(): array
    {
        return $this->subscriptionDescriptions;
    }
    /**
     * Subscription descriptions
     *
     * @param list<ProfileProviderSubscriptionDescription> $subscriptionDescriptions
     *
     * @return self
     */
    public function setSubscriptionDescriptions(array $subscriptionDescriptions): self
    {
        $this->initialized['subscriptionDescriptions'] = true;
        $this->subscriptionDescriptions = $subscriptionDescriptions;
        return $this;
    }
    /**
     * Whitelisted domains
     *
     * @return list<string>
     */
    public function getWhitelistedDomains(): array
    {
        return $this->whitelistedDomains;
    }
    /**
     * Whitelisted domains
     *
     * @param list<string> $whitelistedDomains
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