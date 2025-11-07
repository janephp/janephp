<?php

namespace Jane\Generated\DigitalOcean\Model;

class ApiMeta extends \ArrayObject
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
     * The current page
     *
     * @var int
     */
    protected $page;
    /**
     * Total number of pages
     *
     * @var int
     */
    protected $pages;
    /**
     * Total amount of items over all pages
     *
     * @var int
     */
    protected $total;
    /**
     * The current page
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
    /**
     * The current page
     *
     * @param int $page
     *
     * @return self
     */
    public function setPage(int $page): self
    {
        $this->initialized['page'] = true;
        $this->page = $page;
        return $this;
    }
    /**
     * Total number of pages
     *
     * @return int
     */
    public function getPages(): int
    {
        return $this->pages;
    }
    /**
     * Total number of pages
     *
     * @param int $pages
     *
     * @return self
     */
    public function setPages(int $pages): self
    {
        $this->initialized['pages'] = true;
        $this->pages = $pages;
        return $this;
    }
    /**
     * Total amount of items over all pages
     *
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }
    /**
     * Total amount of items over all pages
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}