<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi31\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class BookingsGetJsonResponse200 implements AdditionalPropertiesInterface
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
     * @var list<Booking>
     */
    protected $data;
    /**
     * @var BookingsGetJsonResponse200Links
     */
    protected $links;
    /**
     * @return list<Booking>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<Booking> $data
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
     * @return BookingsGetJsonResponse200Links
     */
    public function getLinks(): BookingsGetJsonResponse200Links
    {
        return $this->links;
    }
    /**
     * @param BookingsGetJsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(BookingsGetJsonResponse200Links $links): self
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