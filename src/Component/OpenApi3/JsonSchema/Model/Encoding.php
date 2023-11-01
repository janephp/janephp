<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Encoding
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string|null
     */
    protected $contentType;
    /**
     * 
     *
     * @var array<string, Header>|null
     */
    protected $headers;
    /**
     * 
     *
     * @var string|null
     */
    protected $style;
    /**
     * 
     *
     * @var bool|null
     */
    protected $explode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $allowReserved = false;
    /**
     * 
     *
     * @return string|null
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string|null $contentType
     *
     * @return self
     */
    public function setContentType(?string $contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Header>|null
     */
    public function getHeaders() : ?iterable
    {
        return $this->headers;
    }
    /**
     * 
     *
     * @param array<string, Header>|null $headers
     *
     * @return self
     */
    public function setHeaders(?iterable $headers) : self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * 
     *
     * @param string|null $style
     *
     * @return self
     */
    public function setStyle(?string $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    /**
     * 
     *
     * @param bool|null $explode
     *
     * @return self
     */
    public function setExplode(?bool $explode) : self
    {
        $this->initialized['explode'] = true;
        $this->explode = $explode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
    /**
     * 
     *
     * @param bool|null $allowReserved
     *
     * @return self
     */
    public function setAllowReserved(?bool $allowReserved) : self
    {
        $this->initialized['allowReserved'] = true;
        $this->allowReserved = $allowReserved;
        return $this;
    }
}