<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Response extends \ArrayObject
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
    protected $description;
    /**
     * 
     *
     * @var array<string, Header|Reference>|null
     */
    protected $headers;
    /**
     * 
     *
     * @var array<string, MediaType>|null
     */
    protected $content;
    /**
     * 
     *
     * @var array<string, Link|Reference>|null
     */
    protected $links;
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Header|Reference>|null
     */
    public function getHeaders() : ?iterable
    {
        return $this->headers;
    }
    /**
     * 
     *
     * @param array<string, Header|Reference>|null $headers
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
     * @return array<string, MediaType>|null
     */
    public function getContent() : ?iterable
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param array<string, MediaType>|null $content
     *
     * @return self
     */
    public function setContent(?iterable $content) : self
    {
        $this->initialized['content'] = true;
        $this->content = $content;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, Link|Reference>|null
     */
    public function getLinks() : ?iterable
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param array<string, Link|Reference>|null $links
     *
     * @return self
     */
    public function setLinks(?iterable $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}