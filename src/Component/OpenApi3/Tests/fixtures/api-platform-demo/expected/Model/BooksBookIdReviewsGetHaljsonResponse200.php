<?php

namespace ApiPlatform\Demo\Model;

class BooksBookIdReviewsGetHaljsonResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<ReviewJsonhalReviewRead>
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
     * @var BooksBookIdReviewsGetHaljsonResponse200Links
     */
    protected $links;
    /**
     * 
     *
     * @return list<ReviewJsonhalReviewRead>
     */
    public function getEmbedded() : array
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param list<ReviewJsonhalReviewRead> $embedded
     *
     * @return self
     */
    public function setEmbedded(array $embedded) : self
    {
        $this->initialized['embedded'] = true;
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
        $this->initialized['totalItems'] = true;
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
        $this->initialized['itemsPerPage'] = true;
        $this->itemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetHaljsonResponse200Links
     */
    public function getLinks() : BooksBookIdReviewsGetHaljsonResponse200Links
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetHaljsonResponse200Links $links
     *
     * @return self
     */
    public function setLinks(BooksBookIdReviewsGetHaljsonResponse200Links $links) : self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
}