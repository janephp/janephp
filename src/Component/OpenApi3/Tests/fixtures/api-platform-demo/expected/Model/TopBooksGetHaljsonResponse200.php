<?php

namespace ApiPlatform\Demo\Model;

class TopBooksGetHaljsonResponse200
{
    /**
     * 
     *
     * @var TopBookJsonhal[]
     */
    protected $embedded;
    /**
     * 
     *
     * @var int
     */
    protected $totalItems;
    /**
     * 
     *
     * @var int
     */
    protected $itemsPerPage;
    /**
     * 
     *
     * @var TopBooksGetHaljsonResponse200Links
     */
    protected $links;
    /**
     * 
     *
     * @return TopBookJsonhal[]
     */
    public function getEmbedded() : array
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param TopBookJsonhal[] $embedded
     *
     * @return self
     */
    public function setEmbedded(array $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalItems() : int
    {
        return $this->totalItems;
    }
    /**
     * 
     *
     * @param int $totalItems
     *
     * @return self
     */
    public function setTotalItems(int $totalItems) : self
    {
        $this->totalItems = $totalItems;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getItemsPerPage() : int
    {
        return $this->itemsPerPage;
    }
    /**
     * 
     *
     * @param int $itemsPerPage
     *
     * @return self
     */
    public function setItemsPerPage(int $itemsPerPage) : self
    {
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * 
     *
     * @return TopBooksGetHaljsonResponse200Links
     */
    public function getLinks() : TopBooksGetHaljsonResponse200Links
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param TopBooksGetHaljsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(TopBooksGetHaljsonResponse200Links $links) : self
    {
        $this->links = $links;
        return $this;
    }
}