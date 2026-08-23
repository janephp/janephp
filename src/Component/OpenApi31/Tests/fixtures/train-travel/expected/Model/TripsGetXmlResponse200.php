<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class TripsGetXmlResponse200
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
     * @var list<Trip>
     */
    protected $data;
    /**
     * @var TripsGetXmlResponse200Links
     */
    protected $links;
    /**
     * @return list<Trip>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * @param list<Trip> $data
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
     * @return TripsGetXmlResponse200Links
     */
    public function getLinks(): TripsGetXmlResponse200Links
    {
        return $this->links;
    }
    /**
     * @param TripsGetXmlResponse200Links $links
     *
     * @return self
     */
    public function setLinks(TripsGetXmlResponse200Links $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}