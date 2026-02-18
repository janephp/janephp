<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class UrlFilteringCreateUrlFilteringPolicy
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
     * Identifier of the System (root) domain or partner managed domain to which the URL filtering policy belongs
     *
     * @var string
     */
    protected $domainId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $description;
    /**
     * The filtering level of the URL Filtering policy
     *
     * @var string
     */
    protected $filteringLevel;
    /**
     * The block category IDs of the URL Filtering policy
     *
     * @var list<int>
     */
    protected $blockCategories;
    /**
     * Enable Google safe search of the URL Filtering policy
     *
     * @var bool
     */
    protected $safeSearchGoogleEnabled;
    /**
     * Google DNS for safe search of the URL Filtering policy
     *
     * @var string
     */
    protected $safeSearchGoogleDns;
    /**
     * Enable YouTube safe search of the URL Filtering policy
     *
     * @var bool
     */
    protected $safeSearchYouTubeEnabled;
    /**
     * YouTube DNS for safe search of the URL Filtering policy
     *
     * @var string
     */
    protected $safeSearchYouTubeDns;
    /**
     * Enable Bing safe search of the URL Filtering policy
     *
     * @var bool
     */
    protected $safeSearchBingEnabled;
    /**
     * Bing DNS for safe search of the URL Filtering policy
     *
     * @var string
     */
    protected $safeSearchBingDns;
    /**
     * The whitelist of the URL Filtering policy
     *
     * @var list<string>
     */
    protected $whitelist;
    /**
     * The blacklist of the URL Filtering policy
     *
     * @var list<string>
     */
    protected $blacklist;
    /**
     * @var UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig
     */
    protected $blockByThreatLevelConfig;
    /**
     * Identifier of the System (root) domain or partner managed domain to which the URL filtering policy belongs
     *
     * @return string
     */
    public function getDomainId(): string
    {
        return $this->domainId;
    }
    /**
     * Identifier of the System (root) domain or partner managed domain to which the URL filtering policy belongs
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
     * The filtering level of the URL Filtering policy
     *
     * @return string
     */
    public function getFilteringLevel(): string
    {
        return $this->filteringLevel;
    }
    /**
     * The filtering level of the URL Filtering policy
     *
     * @param string $filteringLevel
     *
     * @return self
     */
    public function setFilteringLevel(string $filteringLevel): self
    {
        $this->initialized['filteringLevel'] = true;
        $this->filteringLevel = $filteringLevel;
        return $this;
    }
    /**
     * The block category IDs of the URL Filtering policy
     *
     * @return list<int>
     */
    public function getBlockCategories(): array
    {
        return $this->blockCategories;
    }
    /**
     * The block category IDs of the URL Filtering policy
     *
     * @param list<int> $blockCategories
     *
     * @return self
     */
    public function setBlockCategories(array $blockCategories): self
    {
        $this->initialized['blockCategories'] = true;
        $this->blockCategories = $blockCategories;
        return $this;
    }
    /**
     * Enable Google safe search of the URL Filtering policy
     *
     * @return bool
     */
    public function getSafeSearchGoogleEnabled(): bool
    {
        return $this->safeSearchGoogleEnabled;
    }
    /**
     * Enable Google safe search of the URL Filtering policy
     *
     * @param bool $safeSearchGoogleEnabled
     *
     * @return self
     */
    public function setSafeSearchGoogleEnabled(bool $safeSearchGoogleEnabled): self
    {
        $this->initialized['safeSearchGoogleEnabled'] = true;
        $this->safeSearchGoogleEnabled = $safeSearchGoogleEnabled;
        return $this;
    }
    /**
     * Google DNS for safe search of the URL Filtering policy
     *
     * @return string
     */
    public function getSafeSearchGoogleDns(): string
    {
        return $this->safeSearchGoogleDns;
    }
    /**
     * Google DNS for safe search of the URL Filtering policy
     *
     * @param string $safeSearchGoogleDns
     *
     * @return self
     */
    public function setSafeSearchGoogleDns(string $safeSearchGoogleDns): self
    {
        $this->initialized['safeSearchGoogleDns'] = true;
        $this->safeSearchGoogleDns = $safeSearchGoogleDns;
        return $this;
    }
    /**
     * Enable YouTube safe search of the URL Filtering policy
     *
     * @return bool
     */
    public function getSafeSearchYouTubeEnabled(): bool
    {
        return $this->safeSearchYouTubeEnabled;
    }
    /**
     * Enable YouTube safe search of the URL Filtering policy
     *
     * @param bool $safeSearchYouTubeEnabled
     *
     * @return self
     */
    public function setSafeSearchYouTubeEnabled(bool $safeSearchYouTubeEnabled): self
    {
        $this->initialized['safeSearchYouTubeEnabled'] = true;
        $this->safeSearchYouTubeEnabled = $safeSearchYouTubeEnabled;
        return $this;
    }
    /**
     * YouTube DNS for safe search of the URL Filtering policy
     *
     * @return string
     */
    public function getSafeSearchYouTubeDns(): string
    {
        return $this->safeSearchYouTubeDns;
    }
    /**
     * YouTube DNS for safe search of the URL Filtering policy
     *
     * @param string $safeSearchYouTubeDns
     *
     * @return self
     */
    public function setSafeSearchYouTubeDns(string $safeSearchYouTubeDns): self
    {
        $this->initialized['safeSearchYouTubeDns'] = true;
        $this->safeSearchYouTubeDns = $safeSearchYouTubeDns;
        return $this;
    }
    /**
     * Enable Bing safe search of the URL Filtering policy
     *
     * @return bool
     */
    public function getSafeSearchBingEnabled(): bool
    {
        return $this->safeSearchBingEnabled;
    }
    /**
     * Enable Bing safe search of the URL Filtering policy
     *
     * @param bool $safeSearchBingEnabled
     *
     * @return self
     */
    public function setSafeSearchBingEnabled(bool $safeSearchBingEnabled): self
    {
        $this->initialized['safeSearchBingEnabled'] = true;
        $this->safeSearchBingEnabled = $safeSearchBingEnabled;
        return $this;
    }
    /**
     * Bing DNS for safe search of the URL Filtering policy
     *
     * @return string
     */
    public function getSafeSearchBingDns(): string
    {
        return $this->safeSearchBingDns;
    }
    /**
     * Bing DNS for safe search of the URL Filtering policy
     *
     * @param string $safeSearchBingDns
     *
     * @return self
     */
    public function setSafeSearchBingDns(string $safeSearchBingDns): self
    {
        $this->initialized['safeSearchBingDns'] = true;
        $this->safeSearchBingDns = $safeSearchBingDns;
        return $this;
    }
    /**
     * The whitelist of the URL Filtering policy
     *
     * @return list<string>
     */
    public function getWhitelist(): array
    {
        return $this->whitelist;
    }
    /**
     * The whitelist of the URL Filtering policy
     *
     * @param list<string> $whitelist
     *
     * @return self
     */
    public function setWhitelist(array $whitelist): self
    {
        $this->initialized['whitelist'] = true;
        $this->whitelist = $whitelist;
        return $this;
    }
    /**
     * The blacklist of the URL Filtering policy
     *
     * @return list<string>
     */
    public function getBlacklist(): array
    {
        return $this->blacklist;
    }
    /**
     * The blacklist of the URL Filtering policy
     *
     * @param list<string> $blacklist
     *
     * @return self
     */
    public function setBlacklist(array $blacklist): self
    {
        $this->initialized['blacklist'] = true;
        $this->blacklist = $blacklist;
        return $this;
    }
    /**
     * @return UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig
     */
    public function getBlockByThreatLevelConfig(): UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig
    {
        return $this->blockByThreatLevelConfig;
    }
    /**
     * @param UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig $blockByThreatLevelConfig
     *
     * @return self
     */
    public function setBlockByThreatLevelConfig(UrlFilteringCreateUrlFilteringPolicyBlockByThreatLevelConfig $blockByThreatLevelConfig): self
    {
        $this->initialized['blockByThreatLevelConfig'] = true;
        $this->blockByThreatLevelConfig = $blockByThreatLevelConfig;
        return $this;
    }
}