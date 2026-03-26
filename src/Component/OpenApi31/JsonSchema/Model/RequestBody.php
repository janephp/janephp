<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class RequestBody
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
     * @var array<string, MediaType>|null
     */
    protected $content;
    /**
     * @var bool|null
     */
    protected $required = false;

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

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setRequired(?bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }
}
