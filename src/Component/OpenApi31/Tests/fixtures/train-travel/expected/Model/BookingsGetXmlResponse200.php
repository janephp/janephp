<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class BookingsGetXmlResponse200
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
     * @var list<Booking>
     */
    protected $data;
    /**
     * @var BookingsGetXmlResponse200Links
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
     * @return BookingsGetXmlResponse200Links
     */
    public function getLinks(): BookingsGetXmlResponse200Links
    {
        return $this->links;
    }
    /**
     * @param BookingsGetXmlResponse200Links $links
     *
     * @return self
     */
    public function setLinks(BookingsGetXmlResponse200Links $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}