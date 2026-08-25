<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PaginatedResource implements AdditionalPropertiesInterface
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
     * @var PaginatedResourceMeta
     */
    protected $meta;
    /**
     * @return PaginatedResourceMeta
     */
    public function getMeta(): PaginatedResourceMeta
    {
        return $this->meta;
    }
    /**
     * @param PaginatedResourceMeta $meta
     *
     * @return self
     */
    public function setMeta(PaginatedResourceMeta $meta): self
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