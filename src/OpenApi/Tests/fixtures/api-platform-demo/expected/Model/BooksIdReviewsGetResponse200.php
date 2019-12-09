<?php

namespace ApiPlatform\Demo\Model;

class BooksIdReviewsGetResponse200
{
    /**
     * 
     *
     * @var object[]
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
     * @var BooksIdReviewsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var BooksIdReviewsGetResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return object[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param object[] $hydraMember
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
     * @return BooksIdReviewsGetResponse200HydraView
     */
    public function getHydraView() : BooksIdReviewsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param BooksIdReviewsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(BooksIdReviewsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return BooksIdReviewsGetResponse200HydraSearch
     */
    public function getHydraSearch() : BooksIdReviewsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param BooksIdReviewsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(BooksIdReviewsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}