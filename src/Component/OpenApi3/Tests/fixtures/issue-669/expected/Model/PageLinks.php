<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PageLinks implements AdditionalPropertiesInterface
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
     * @var 
     */
    protected $pages;
    /**
     * @return 
     */
    public function getPages()
    {
        return $this->pages;
    }
    /**
     * @param  $pages
     *
     * @return self
     */
    public function setPages($pages): self
    {
        $this->initialized['pages'] = true;
        $this->pages = $pages;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['pages' => ['pages', 'getPages', 'setPages']];
    }
}