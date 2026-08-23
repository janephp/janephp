<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class StationsGetXmlResponse200
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
     * @var list<Station>
     */
    protected $data;
    /**
     * @var StationsGetXmlResponse200Links
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
     * @return StationsGetXmlResponse200Links
     */
    public function getLinks(): StationsGetXmlResponse200Links
    {
        return $this->links;
    }
    /**
     * @param StationsGetXmlResponse200Links $links
     *
     * @return self
     */
    public function setLinks(StationsGetXmlResponse200Links $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}