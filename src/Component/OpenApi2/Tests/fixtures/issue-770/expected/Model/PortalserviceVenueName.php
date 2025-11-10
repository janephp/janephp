<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class PortalserviceVenueName
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
     * @var string
     */
    protected $language;
    /**
     * Venue name
     *
     * @var string
     */
    protected $name;
    /**
     * @var list<string>
     */
    protected $venueUrls;
    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * Venue name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Venue name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getVenueUrls(): array
    {
        return $this->venueUrls;
    }
    /**
     * @param list<string> $venueUrls
     *
     * @return self
     */
    public function setVenueUrls(array $venueUrls): self
    {
        $this->initialized['venueUrls'] = true;
        $this->venueUrls = $venueUrls;
        return $this;
    }
}