<?php

namespace ApiPlatform\Demo\Model;

class BooksGetHaljsonResponse200
{
    /**
     * 
     *
     * @var BookJsonhalBookRead[]
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
     * @var BooksGetHaljsonResponse200Links
     */
    protected $links;
    /**
     * 
     *
     * @return BookJsonhalBookRead[]
     */
    public function getEmbedded() : array
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param BookJsonhalBookRead[] $embedded
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
     * @return BooksGetHaljsonResponse200Links
     */
    public function getLinks() : BooksGetHaljsonResponse200Links
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param BooksGetHaljsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(BooksGetHaljsonResponse200Links $links) : self
    {
        $this->links = $links;
        return $this;
    }
}