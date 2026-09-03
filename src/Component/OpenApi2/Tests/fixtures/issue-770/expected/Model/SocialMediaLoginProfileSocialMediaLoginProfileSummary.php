<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SocialMediaLoginProfileSocialMediaLoginProfileSummary
{
    /**
     * @var string
     */
    public string $id;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var bool
     */
    public bool $linkedinEnabled;
    /**
     * @var string
     */
    public string $linkedinClientId;
    /**
     * @var string
     */
    public string $linkedinSecret;
    /**
     * @var bool
     */
    public bool $googleEnabled;
    /**
     * @var string
     */
    public string $googleClientId;
    /**
     * @var string
     */
    public string $googleSecret;
    /**
     * @var bool
     */
    public bool $microsoftEnabled;
    /**
     * @var string
     */
    public string $microsoftClientId;
    /**
     * @var string
     */
    public string $microsoftSecret;
    /**
     * @var bool
     */
    public bool $facebookEnabled;
    /**
     * @var string
     */
    public string $facebookClientId;
    /**
     * @var string
     */
    public string $facebookSecret;
    /**
     * @var list<SocialMediaLoginProfileWhitelistedDomain>
     */
    public array $whitelistedDomains;
}