<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToFirstPage implements AdditionalPropertiesInterface
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
     * URI of the first page of the results.
     *
     * @var string
     */
    protected $first;
    /**
     * URI of the first page of the results.
     *
     * @return string
     */
    public function getFirst(): string
    {
        return $this->first;
    }
    /**
     * URI of the first page of the results.
     *
     * @param string $first
     *
     * @return self
     */
    public function setFirst(string $first): self
    {
        $this->initialized['first'] = true;
        $this->first = $first;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['first' => ['first', 'getFirst', 'setFirst']];
    }
}