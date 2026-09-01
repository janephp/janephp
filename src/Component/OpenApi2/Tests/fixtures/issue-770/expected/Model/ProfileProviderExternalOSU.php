<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class ProfileProviderExternalOSU
{
    /**
     * Provisioning protocal
     *
     * @var list<string>
     */
    public array $provisioningProtocals;
    /**
     * @var string
     */
    public string $osuServiceUrl;
    /**
     * Online signup NAI realm, it should be one of realm as defined in Hotspot 2.0 identity provider
     *
     * @var string
     */
    public string $osuNaiRealm;
    /**
     * @var string
     */
    public string $singleSsidNai;
    /**
     * The base64 encoded data of icon.
     *
     * @var string
     */
    public string $commonLanguageIcon;
    /**
     * Subscription descriptions
     *
     * @var list<ProfileProviderSubscriptionDescription>
     */
    public array $subscriptionDescriptions;
    /**
     * Whitelisted domains
     *
     * @var list<string>
     */
    public array $whitelistedDomains;
}