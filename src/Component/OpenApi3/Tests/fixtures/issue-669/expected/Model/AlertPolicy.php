<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AlertPolicy implements AdditionalPropertiesInterface
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
     * @var Alerts
     */
    protected $alerts;
    /**
     * @var string
     */
    protected $compare;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var list<string>
     */
    protected $entities;
    /**
     * @var list<string>
     */
    protected $tags;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $uuid;
    /**
     * @var float
     */
    protected $value;
    /**
     * @var string
     */
    protected $window;
    /**
     * @return Alerts
     */
    public function getAlerts(): Alerts
    {
        return $this->alerts;
    }
    /**
     * @param Alerts $alerts
     *
     * @return self
     */
    public function setAlerts(Alerts $alerts): self
    {
        $this->initialized['alerts'] = true;
        $this->alerts = $alerts;
        return $this;
    }
    /**
     * @return string
     */
    public function getCompare(): string
    {
        return $this->compare;
    }
    /**
     * @param string $compare
     *
     * @return self
     */
    public function setCompare(string $compare): self
    {
        $this->initialized['compare'] = true;
        $this->compare = $compare;
        return $this;
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
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
    /**
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getEntities(): array
    {
        return $this->entities;
    }
    /**
     * @param list<string> $entities
     *
     * @return self
     */
    public function setEntities(array $entities): self
    {
        $this->initialized['entities'] = true;
        $this->entities = $entities;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * @param list<string> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
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
     * @return string
     */
    public function getUuid(): string
    {
        return $this->uuid;
    }
    /**
     * @param string $uuid
     *
     * @return self
     */
    public function setUuid(string $uuid): self
    {
        $this->initialized['uuid'] = true;
        $this->uuid = $uuid;
        return $this;
    }
    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
    /**
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return string
     */
    public function getWindow(): string
    {
        return $this->window;
    }
    /**
     * @param string $window
     *
     * @return self
     */
    public function setWindow(string $window): self
    {
        $this->initialized['window'] = true;
        $this->window = $window;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['alerts' => ['alerts', 'getAlerts', 'setAlerts'], 'compare' => ['compare', 'getCompare', 'setCompare'], 'description' => ['description', 'getDescription', 'setDescription'], 'enabled' => ['enabled', 'getEnabled', 'setEnabled'], 'entities' => ['entities', 'getEntities', 'setEntities'], 'tags' => ['tags', 'getTags', 'setTags'], 'type' => ['type', 'getType', 'setType'], 'uuid' => ['uuid', 'getUuid', 'setUuid'], 'value' => ['value', 'getValue', 'setValue'], 'window' => ['window', 'getWindow', 'setWindow']];
    }
}