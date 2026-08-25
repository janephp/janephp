<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToLastPage implements AdditionalPropertiesInterface
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
     * URI of the last page of the results.
     *
     * @var string
     */
    protected $last;
    /**
     * URI of the last page of the results.
     *
     * @return string
     */
    public function getLast(): string
    {
        return $this->last;
    }
    /**
     * URI of the last page of the results.
     *
     * @param string $last
     *
     * @return self
     */
    public function setLast(string $last): self
    {
        $this->initialized['last'] = true;
        $this->last = $last;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['last' => ['last', 'getLast', 'setLast']];
    }
}