<?php

namespace ApiPlatform\Demo\Model;

class ReviewsGetLdjsonResponse200
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
     * @var ReviewsGetLdjsonResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ReviewsGetLdjsonResponse200HydraSearch
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
     * @return ReviewsGetLdjsonResponse200HydraView
     */
    public function getHydraView() : ReviewsGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ReviewsGetLdjsonResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ReviewsGetLdjsonResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ReviewsGetLdjsonResponse200HydraSearch
     */
    public function getHydraSearch() : ReviewsGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ReviewsGetLdjsonResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ReviewsGetLdjsonResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}