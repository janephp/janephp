<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ApiWebCrawlerDataSource implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The base url to crawl.
     *
     * @var string
     */
    public string $baseUrl;
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
    public string $crawlingOption = 'UNKNOWN';
    /**
     * Whether to ingest and index media (images, etc.) on web pages.
     *
     * @var bool
     */
    public bool $embedMedia;
    /**
     * Declaring which tags to exclude in web pages while webcrawling
     *
     * @var list<string>
     */
    public array $excludeTags;
    public function definedProperties(): array
    {
        return ['baseUrl' => 'base_url', 'crawlingOption' => 'crawling_option', 'embedMedia' => 'embed_media', 'excludeTags' => 'exclude_tags'];
    }
}