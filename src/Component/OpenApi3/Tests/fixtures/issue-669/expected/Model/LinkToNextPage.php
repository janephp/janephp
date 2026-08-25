<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToNextPage implements AdditionalPropertiesInterface
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
     * URI of the next page of the results.
     *
     * @var string
     */
    protected $next;
    /**
     * URI of the next page of the results.
     *
     * @return string
     */
    public function getNext(): string
    {
        return $this->next;
    }
    /**
     * URI of the next page of the results.
     *
     * @param string $next
     *
     * @return self
     */
    public function setNext(string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['next' => ['next', 'getNext', 'setNext']];
    }
}