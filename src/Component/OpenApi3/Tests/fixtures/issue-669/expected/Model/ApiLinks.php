<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiLinks extends \ArrayObject
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
     * Information about how to reach other pages
     *
     * @var ApiPages
     */
    protected $pages;
    /**
     * Information about how to reach other pages
     *
     * @return ApiPages
     */
    public function getPages(): ApiPages
    {
        return $this->pages;
    }
    /**
     * Information about how to reach other pages
     *
     * @param ApiPages $pages
     *
     * @return self
     */
    public function setPages(ApiPages $pages): self
    {
        $this->initialized['pages'] = true;
        $this->pages = $pages;
        return $this;
    }
}