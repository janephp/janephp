<?php

namespace Jane\Component\OpenApi31\JsonSchema\Model;

class Parameter
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
    protected $name;
    /**
     * @var mixed|null
     */
    protected $in;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var bool|null
     */
    protected $required = false;
    /**
     * @var bool|null
     */
    protected $deprecated = false;
    /**
     * @var mixed|null
     */
    protected $schema;
    /**
     * @var array<string, MediaType>|null
     */
    protected $content;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getIn()
    {
        return $this->in;
    }

    public function setIn($in): self
    {
        $this->initialized['in'] = true;
        $this->in = $in;

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

    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    public function setDeprecated(?bool $deprecated): self
    {
        $this->initialized['deprecated'] = true;
        $this->deprecated = $deprecated;

        return $this;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema($schema): self
    {
        $this->initialized['schema'] = true;
        $this->schema = $schema;

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
}
