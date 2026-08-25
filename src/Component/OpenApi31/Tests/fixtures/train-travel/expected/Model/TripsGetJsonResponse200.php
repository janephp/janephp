<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class TripsGetJsonResponse200 implements AdditionalPropertiesInterface
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
     * @var list<TripsGetJsonResponse200DataItem>
     */
    protected $data;
    /**
     * @var TripsGetJsonResponse200Links
     */
    protected $links;
    /**
     * @return list<TripsGetJsonResponse200DataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<TripsGetJsonResponse200DataItem> $data
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
     * @return TripsGetJsonResponse200Links
     */
    public function getLinks(): TripsGetJsonResponse200Links
    {
        return $this->links;
    }
    /**
     * @param TripsGetJsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(TripsGetJsonResponse200Links $links): self
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