<?php

namespace ApiPlatform\Demo\Model;

class BooksBookIdReviewsGetLdjsonResponse200 extends \ArrayObject
{
    /**
     * 
     *
     * @var ReviewJsonldReviewRead[]
     */
    protected $hydraMember;
    /**
     * 
     *
     * @var int
     */
    protected $hydraTotalItems;
    /**
     * 
     *
     * @var BooksBookIdReviewsGetLdjsonResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var BooksBookIdReviewsGetLdjsonResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ReviewJsonldReviewRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ReviewJsonldReviewRead[] $hydraMember
     *
     * @return self
     */
    public function setHydraMember(array $hydraMember) : self
    {
        $this->hydraMember = $hydraMember;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHydraTotalItems() : int
    {
        return $this->hydraTotalItems;
    }
    /**
     * 
     *
     * @param int $hydraTotalItems
     *
     * @return self
     */
    public function setHydraTotalItems(int $hydraTotalItems) : self
    {
        $this->hydraTotalItems = $hydraTotalItems;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetLdjsonResponse200HydraView
     */
    public function getHydraView() : BooksBookIdReviewsGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetLdjsonResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(BooksBookIdReviewsGetLdjsonResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return BooksBookIdReviewsGetLdjsonResponse200HydraSearch
     */
    public function getHydraSearch() : BooksBookIdReviewsGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param BooksBookIdReviewsGetLdjsonResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(BooksBookIdReviewsGetLdjsonResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}