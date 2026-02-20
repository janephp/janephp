<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Response
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var array<string, mixed>|null
     */
    protected $headers;
    /**
     * @var array<string, MediaType>|null
     */
    protected $content;
    /**
     * @var array<string, mixed>|null
     */
    protected $links;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getHeaders(): ?iterable
    {
        return $this->headers;
    }

    /**
     * @param array<string, mixed>|null $headers
     */
    public function setHeaders(?iterable $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return array<string, MediaType>|null
     */
    public function getContent(): ?iterable
    {
        return $this->content;
    }

    /**
     * @param array<string, MediaType>|null $content
     */
    public function setContent(?iterable $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getLinks(): ?iterable
    {
        return $this->links;
    }

    /**
     * @param array<string, mixed>|null $links
     */
    public function setLinks(?iterable $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
