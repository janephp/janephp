<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class StationsGetJsonResponse200 implements AdditionalPropertiesInterface
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
     * @var list<Station>
     */
    protected $data;
    /**
     * @var StationsGetJsonResponse200Links
     */
    protected $links;
    /**
     * @return list<Station>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<Station> $data
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
     * @return StationsGetJsonResponse200Links
     */
    public function getLinks(): StationsGetJsonResponse200Links
    {
        return $this->links;
    }
    /**
     * @param StationsGetJsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(StationsGetJsonResponse200Links $links): self
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