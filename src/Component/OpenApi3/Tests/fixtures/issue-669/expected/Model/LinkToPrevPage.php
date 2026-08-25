<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class LinkToPrevPage implements AdditionalPropertiesInterface
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
     * URI of the previous page of the results.
     *
     * @var string
     */
    protected $prev;
    /**
     * URI of the previous page of the results.
     *
     * @return string
     */
    public function getPrev(): string
    {
        return $this->prev;
    }
    /**
     * URI of the previous page of the results.
     *
     * @param string $prev
     *
     * @return self
     */
    public function setPrev(string $prev): self
    {
        $this->initialized['prev'] = true;
        $this->prev = $prev;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['prev' => ['prev', 'getPrev', 'setPrev']];
    }
}