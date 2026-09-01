<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class SocialMediaLoginProfileSocialMediaLoginProfileWithEditInfo
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
     * @var string
     */
    public string $description;
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
    /**
     * @var string
     */
    public string $zoneId;
    /**
     * @var int
     */
    public int $createDateTime;
    /**
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * @var string
     */
    public string $creatorUsername;
    /**
     * @var string
     */
    public string $modifierUsername;
}