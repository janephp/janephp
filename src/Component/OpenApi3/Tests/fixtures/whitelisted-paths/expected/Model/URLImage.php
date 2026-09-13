<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class URLImage implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A validly formatted URL.
     *
     * @var string
     */
    public string $url;
    /**
     * The height of the media in pixels
     *
     * @var int
     */
    public int $height;
    /**
     * The width of the media in pixels
     *
     * @var int
     */
    public int $width;
    public function definedProperties(): array
    {
        return ['url' => 'url', 'height' => 'height', 'width' => 'width'];
    }
}