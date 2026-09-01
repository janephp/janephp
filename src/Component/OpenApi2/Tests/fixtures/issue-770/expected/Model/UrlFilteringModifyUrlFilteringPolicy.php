<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class UrlFilteringModifyUrlFilteringPolicy
{
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
     * @var UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfig
     */
    public UrlFilteringModifyUrlFilteringPolicyBlockByThreatLevelConfig $blockByThreatLevelConfig;
}