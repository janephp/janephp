<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MetaOptionalTotal implements AdditionalPropertiesInterface
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
     * Information about the response itself.
     *
     * @var MetaProperties
     */
    protected $meta;
    /**
     * Information about the response itself.
     *
     * @return MetaProperties
     */
    public function getMeta(): MetaProperties
    {
        return $this->meta;
    }
    /**
     * Information about the response itself.
     *
     * @param MetaProperties $meta
     *
     * @return self
     */
    public function setMeta(MetaProperties $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['meta' => ['meta', 'getMeta', 'setMeta']];
    }
}