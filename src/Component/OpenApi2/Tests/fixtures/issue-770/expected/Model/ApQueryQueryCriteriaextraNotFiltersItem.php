<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class ApQueryQueryCriteriaExtraNotFiltersItem
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
     * Filters for specific attribute
     *
     * @var string
     */
    protected $type;
    /**
     * value not to search
     *
     * @var string
     */
    protected $value;
    /**
     * Filters for specific attribute
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Filters for specific attribute
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
     * value not to search
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * value not to search
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}