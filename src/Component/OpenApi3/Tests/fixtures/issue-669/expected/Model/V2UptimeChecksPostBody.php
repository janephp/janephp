<?php

namespace Jane\Generated\DigitalOcean\Model;

class V2UptimeChecksPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * A human-friendly display name.
     *
     * @var string
     */
    protected $name;
    /**
     * The type of health check to perform.
     *
     * @var string
     */
    protected $type;
    /**
     * The endpoint to perform healthchecks on.
     *
     * @var string
     */
    protected $target;
    /**
     * An array containing the selected regions to perform healthchecks from.
     *
     * @var list<string>
     */
    protected $regions;
    /**
     * A boolean value indicating whether the check is enabled/disabled.
     *
     * @var bool
     */
    protected $enabled = true;
    /**
     * A human-friendly display name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A human-friendly display name.
     *
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
     * The type of health check to perform.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The type of health check to perform.
     *
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
     * The endpoint to perform healthchecks on.
     *
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }
    /**
     * The endpoint to perform healthchecks on.
     *
     * @param string $target
     *
     * @return self
     */
    public function setTarget(string $target): self
    {
        $this->initialized['target'] = true;
        $this->target = $target;
        return $this;
    }
    /**
     * An array containing the selected regions to perform healthchecks from.
     *
     * @return list<string>
     */
    public function getRegions(): array
    {
        return $this->regions;
    }
    /**
     * An array containing the selected regions to perform healthchecks from.
     *
     * @param list<string> $regions
     *
     * @return self
     */
    public function setRegions(array $regions): self
    {
        $this->initialized['regions'] = true;
        $this->regions = $regions;
        return $this;
    }
    /**
     * A boolean value indicating whether the check is enabled/disabled.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * A boolean value indicating whether the check is enabled/disabled.
     *
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
}