<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiWebCrawlerDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The base url to crawl.
     *
     * @var string
     */
    protected $baseUrl;
    /**
     * Options for specifying how URLs found on pages should be handled.
     * 
     *  - UNKNOWN: Default unknown value
     *  - SCOPED: Only include the base URL.
     *  - PATH: Crawl the base URL and linked pages within the URL path.
     *  - DOMAIN: Crawl the base URL and linked pages within the same domain.
     *  - SUBDOMAINS: Crawl the base URL and linked pages for any subdomain.
     *  - SITEMAP: Crawl URLs discovered in the sitemap.
     *
     * @var string
     */
    protected $crawlingOption = 'UNKNOWN';
    /**
     * Whether to ingest and index media (images, etc.) on web pages.
     *
     * @var bool
     */
    protected $embedMedia;
    /**
     * Declaring which tags to exclude in web pages while webcrawling
     *
     * @var list<string>
     */
    protected $excludeTags;
    /**
     * The base url to crawl.
     *
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }
    /**
     * The base url to crawl.
     *
     * @param string $baseUrl
     *
     * @return self
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->initialized['baseUrl'] = true;
        $this->baseUrl = $baseUrl;
        return $this;
    }
    /**
     * Options for specifying how URLs found on pages should be handled.
     * 
     *  - UNKNOWN: Default unknown value
     *  - SCOPED: Only include the base URL.
     *  - PATH: Crawl the base URL and linked pages within the URL path.
     *  - DOMAIN: Crawl the base URL and linked pages within the same domain.
     *  - SUBDOMAINS: Crawl the base URL and linked pages for any subdomain.
     *  - SITEMAP: Crawl URLs discovered in the sitemap.
     *
     * @return string
     */
    public function getCrawlingOption(): string
    {
        return $this->crawlingOption;
    }
    /**
    * Options for specifying how URLs found on pages should be handled.
    
    - UNKNOWN: Default unknown value
    - SCOPED: Only include the base URL.
    - PATH: Crawl the base URL and linked pages within the URL path.
    - DOMAIN: Crawl the base URL and linked pages within the same domain.
    - SUBDOMAINS: Crawl the base URL and linked pages for any subdomain.
    - SITEMAP: Crawl URLs discovered in the sitemap.
    *
    * @param string $crawlingOption
    *
    * @return self
    */
    public function setCrawlingOption(string $crawlingOption): self
    {
        $this->initialized['crawlingOption'] = true;
        $this->crawlingOption = $crawlingOption;
        return $this;
    }
    /**
     * Whether to ingest and index media (images, etc.) on web pages.
     *
     * @return bool
     */
    public function getEmbedMedia(): bool
    {
        return $this->embedMedia;
    }
    /**
     * Whether to ingest and index media (images, etc.) on web pages.
     *
     * @param bool $embedMedia
     *
     * @return self
     */
    public function setEmbedMedia(bool $embedMedia): self
    {
        $this->initialized['embedMedia'] = true;
        $this->embedMedia = $embedMedia;
        return $this;
    }
    /**
     * Declaring which tags to exclude in web pages while webcrawling
     *
     * @return list<string>
     */
    public function getExcludeTags(): array
    {
        return $this->excludeTags;
    }
    /**
     * Declaring which tags to exclude in web pages while webcrawling
     *
     * @param list<string> $excludeTags
     *
     * @return self
     */
    public function setExcludeTags(array $excludeTags): self
    {
        $this->initialized['excludeTags'] = true;
        $this->excludeTags = $excludeTags;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['baseUrl' => ['base_url', 'getBaseUrl', 'setBaseUrl'], 'crawlingOption' => ['crawling_option', 'getCrawlingOption', 'setCrawlingOption'], 'embedMedia' => ['embed_media', 'getEmbedMedia', 'setEmbedMedia'], 'excludeTags' => ['exclude_tags', 'getExcludeTags', 'setExcludeTags']];
    }
}