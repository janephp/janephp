<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class UrlEntity implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Index (zero-based) at which position this entity starts.
     *
     * @var int
     */
    public int $start;
    /**
     * Index (zero-based) at which position this entity ends.
     *
     * @var int
     */
    public int $end;
    /**
     * A validly formatted URL.
     *
     * @var string
     */
    public string $url;
    /**
     * A validly formatted URL.
     *
     * @var string
     */
    public string $expandedUrl;
    /**
     * The URL as displayed in the Twitter client.
     *
     * @var string
     */
    public string $displayUrl;
    /**
     * HTTP Status Code.
     *
     * @var int
     */
    public int $status;
    /**
     * Title of the page the URL points to.
     *
     * @var string
     */
    public string $title;
    /**
     * Description of the URL landing page.
     *
     * @var string
     */
    public string $description;
    /**
     * @var list<URLImage>
     */
    public array $images;
    public function definedProperties(): array
    {
        return ['start' => 'start', 'end' => 'end', 'url' => 'url', 'expandedUrl' => 'expanded_url', 'displayUrl' => 'display_url', 'status' => 'status', 'title' => 'title', 'description' => 'description', 'images' => 'images'];
    }
}