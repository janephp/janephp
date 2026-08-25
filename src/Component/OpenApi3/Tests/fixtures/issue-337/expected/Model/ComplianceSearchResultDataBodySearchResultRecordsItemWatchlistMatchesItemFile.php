<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $build;
    /**
     * @var bool
     */
    protected $custom;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $published;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return string
     */
    public function getBuild(): string
    {
        return $this->build;
    }
    /**
     * @param string $build
     *
     * @return self
     */
    public function setBuild(string $build): self
    {
        $this->initialized['build'] = true;
        $this->build = $build;
        return $this;
    }
    /**
     * @return bool
     */
    public function getCustom(): bool
    {
        return $this->custom;
    }
    /**
     * @param bool $custom
     *
     * @return self
     */
    public function setCustom(bool $custom): self
    {
        $this->initialized['custom'] = true;
        $this->custom = $custom;
        return $this;
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return string
     */
    public function getPublished(): string
    {
        return $this->published;
    }
    /**
     * @param string $published
     *
     * @return self
     */
    public function setPublished(string $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;
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
    public function definedProperties(): array
    {
        return ['build' => ['build', 'getBuild', 'setBuild'], 'custom' => ['custom', 'getCustom', 'setCustom'], 'id' => ['id', 'getId', 'setId'], 'name' => ['name', 'getName', 'setName'], 'published' => ['published', 'getPublished', 'setPublished'], 'type' => ['type', 'getType', 'setType']];
    }
}