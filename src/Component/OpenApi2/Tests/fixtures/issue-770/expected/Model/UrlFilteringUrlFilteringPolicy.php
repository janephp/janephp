<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Issue770\Model;

class UrlFilteringUrlFilteringPolicy
{
    /**
     * Identifier of the URL Filtering policy
     *
     * @var string
     */
    public string $id;
    /**
     * Tenant Id
     *
     * @var string
     */
    public string $tenantId;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the URL filtering policy belongs
     *
     * @var string
     */
    public string $domainId;
    /**
     * @var string
     */
    public string $name;
    /**
     * @var string
     */
    public string $description;
    /**
     * The filtering level of the URL Filtering policy
     *
     * @var string
     */
    public string $filteringLevel;
    /**
     * The block category IDs of the URL Filtering policy
     *
     * @var list<int>
     */
    public array $blockCategories;
    /**
     * Enable Google safe search of the URL Filtering policy
     *
     * @var bool
     */
    public bool $safeSearchGoogleEnabled;
    /**
     * Google DNS for safe search of the URL Filtering policy
     *
     * @var string
     */
    public string $safeSearchGoogleDns;
    /**
     * Enable YouTube safe search of the URL Filtering policy
     *
     * @var bool
     */
    public bool $safeSearchYouTubeEnabled;
    /**
     * YouTube DNS for safe search of the URL Filtering policy
     *
     * @var string
     */
    public string $safeSearchYouTubeDns;
    /**
     * Enable Bing safe search of the URL Filtering policy
     *
     * @var bool
     */
    public bool $safeSearchBingEnabled;
    /**
     * Bing DNS for safe search of the URL Filtering policy
     *
     * @var string
     */
    public string $safeSearchBingDns;
    /**
     * The whitelist of the URL Filtering policy
     *
     * @var list<string>
     */
    public array $whitelist;
    /**
     * The blacklist of the URL Filtering policy
     *
     * @var list<string>
     */
    public array $blacklist;
    /**
     * @var UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfig
     */
    public UrlFilteringUrlFilteringPolicyBlockByThreatLevelConfig $blockByThreatLevelConfig;
    /**
     * Timestamp of being created
     *
     * @var int
     */
    public int $createDateTime;
    /**
     * Timestamp of being modified
     *
     * @var int
     */
    public int $modifiedDateTime;
    /**
     * Creator ID
     *
     * @var string
     */
    public string $creatorId;
    /**
     * Modifier ID
     *
     * @var string
     */
    public string $modifierId;
    /**
     * Creator Name
     *
     * @var string
     */
    public string $creatorUsername;
    /**
     * Modifier Name
     *
     * @var string
     */
    public string $modifierUsername;
}