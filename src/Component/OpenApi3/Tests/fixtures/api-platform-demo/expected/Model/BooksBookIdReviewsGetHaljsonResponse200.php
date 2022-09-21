<?php

namespace ApiPlatform\Demo\Model;

class BooksBookIdReviewsGetHaljsonResponse200
{
    /**
     * 
     *
     * @var ReviewJsonhalReviewRead[]
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
     * @return ReviewJsonhalReviewRead[]
     */
    public function getEmbedded() : array
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param ReviewJsonhalReviewRead[] $embedded
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
        $this->links = $links;
        return $this;
    }
}