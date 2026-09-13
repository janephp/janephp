<?php

namespace Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Model;

use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\WhitelistedPaths\Runtime\AdditionalPropertiesInterface;
class Photo implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $url;
    /**
     * The Media Key identifier for this attachment.
     *
     * @var string
     */
    public string $mediaKey;
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
        return ['type' => 'type', 'url' => 'url', 'mediaKey' => 'media_key', 'height' => 'height', 'width' => 'width'];
    }
}