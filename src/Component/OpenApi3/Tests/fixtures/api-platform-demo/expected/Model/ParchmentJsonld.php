<?php

namespace ApiPlatform\Demo\Model;

use ApiPlatform\Demo\Runtime\AdditionalAndPatternProperties;
use ApiPlatform\Demo\Runtime\AdditionalPropertiesInterface;
/**
 * @deprecated
 */
class ParchmentJsonld implements AdditionalPropertiesInterface
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
     * @var mixed
     */
    protected $context;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $id2;
    /**
     * The title of the book.
     *
     * @var string
     */
    protected $title;
    /**
     * A description of the item.
     *
     * @var string
     */
    protected $description;
    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getId2(): ?string
    {
        return $this->id2;
    }
    /**
     * @param string|null $id2
     *
     * @return self
     */
    public function setId2(?string $id2): self
    {
        $this->initialized['id2'] = true;
        $this->id2 = $id2;
        return $this;
    }
    /**
     * The title of the book.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
    /**
     * The title of the book.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
    /**
     * A description of the item.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * A description of the item.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['context' => ['@context', 'getContext', 'setContext'], 'id' => ['@id', 'getId', 'setId'], 'type' => ['@type', 'getType', 'setType'], 'id2' => ['id', 'getId2', 'setId2'], 'title' => ['title', 'getTitle', 'setTitle'], 'description' => ['description', 'getDescription', 'setDescription']];
    }
}