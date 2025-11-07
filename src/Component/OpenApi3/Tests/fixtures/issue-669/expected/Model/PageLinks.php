<?php

namespace Jane\Generated\DigitalOcean\Model;

class PageLinks extends \ArrayObject
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
}