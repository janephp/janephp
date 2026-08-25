<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class PlanetsGetXmlResponse200 implements AdditionalPropertiesInterface
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
     * @var list<Planet>
     */
    protected $data;
    /**
     * @var PaginatedResourceMeta
     */
    protected $meta;
    /**
     * @return list<Planet>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<Planet> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
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
        return ['data' => ['data', 'getData', 'setData'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}