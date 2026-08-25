<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class URLImage implements AdditionalPropertiesInterface
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
     * A validly formatted URL.
     *
     * @var string
     */
    protected $url;
    /**
     * The height of the media in pixels
     *
     * @var int
     */
    protected $height;
    /**
     * The width of the media in pixels
     *
     * @var int
     */
    protected $width;
    /**
     * A validly formatted URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * A validly formatted URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
    /**
     * The height of the media in pixels
     *
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }
    /**
     * The height of the media in pixels
     *
     * @param int $height
     *
     * @return self
     */
    public function setHeight(int $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * The width of the media in pixels
     *
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * The width of the media in pixels
     *
     * @param int $width
     *
     * @return self
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['url' => ['url', 'getUrl', 'setUrl'], 'height' => ['height', 'getHeight', 'setHeight'], 'width' => ['width', 'getWidth', 'setWidth']];
    }
}