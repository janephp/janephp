<?php

namespace Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Model;

use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalAndPatternProperties;
use Jane\OpenApi3\Tests\Expected\WhitelistedPathsArrayNotation\Runtime\AdditionalPropertiesInterface;
class AnimatedGif implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $previewImageUrl;
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
        return ['type' => 'type', 'previewImageUrl' => 'preview_image_url', 'mediaKey' => 'media_key', 'height' => 'height', 'width' => 'width'];
    }
}