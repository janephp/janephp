<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Server
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
    protected $url;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var array<string, ServerVariable>|null
     */
    protected $variables;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

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
     * @return array<string, ServerVariable>|null
     */
    public function getVariables(): ?iterable
    {
        return $this->variables;
    }

    /**
     * @param array<string, ServerVariable>|null $variables
     */
    public function setVariables(?iterable $variables): self
    {
        $this->initialized['variables'] = true;
        $this->variables = $variables;

        return $this;
    }
}
