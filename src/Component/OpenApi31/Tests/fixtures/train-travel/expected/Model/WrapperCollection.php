<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class WrapperCollection implements AdditionalPropertiesInterface
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
     * The wrapper for a collection is an array of objects.
     *
     * @var list<mixed>
     */
    protected $data;
    /**
     * A set of hypermedia links which serve as controls for the client.
     *
     * @var mixed
     */
    protected $links;
    /**
     * The wrapper for a collection is an array of objects.
     *
     * @return list<mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * The wrapper for a collection is an array of objects.
     *
     * @param list<mixed> $data
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
     * A set of hypermedia links which serve as controls for the client.
     *
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }
    /**
     * A set of hypermedia links which serve as controls for the client.
     *
     * @param mixed $links
     *
     * @return self
     */
    public function setLinks($links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['data' => ['data', 'getData', 'setData'], 'links' => ['links', 'getLinks', 'setLinks']];
    }
}