<?php

namespace ApiPlatform\Demo\Model;

class BooksIdReviewsGetResponse200
{
    /**
     * 
     *
     * @var object[]
     */
    protected $hydra:member;
    /**
     * 
     *
     * @var int
     */
    protected $hydra:totalItems;
    /**
     * 
     *
     * @var BooksIdReviewsGetResponse200HydraView
     */
    protected $hydra:view;
    /**
     * 
     *
     * @var BooksIdReviewsGetResponse200HydraSearch
     */
    protected $hydra:search;
    /**
     * 
     *
     * @return object[]
     */
    public function getHydra:member() : array
    {
        return $this->hydra:member;
    }
    /**
     * 
     *
     * @param object[] $hydra:member
     *
     * @return self
     */
    public function setHydra:member(array $hydra:member) : self
    {
        $this->hydra:member = $hydra:member;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHydra:totalItems() : int
    {
        return $this->hydra:totalItems;
    }
    /**
     * 
     *
     * @param int $hydra:totalItems
     *
     * @return self
     */
    public function setHydra:totalItems(int $hydra:totalItems) : self
    {
        $this->hydra:totalItems = $hydra:totalItems;
        return $this;
    }
    /**
     * 
     *
     * @return BooksIdReviewsGetResponse200HydraView
     */
    public function getHydra:view() : BooksIdReviewsGetResponse200HydraView
    {
        return $this->hydra:view;
    }
    /**
     * 
     *
     * @param BooksIdReviewsGetResponse200HydraView $hydra:view
     *
     * @return self
     */
    public function setHydra:view(BooksIdReviewsGetResponse200HydraView $hydra:view) : self
    {
        $this->hydra:view = $hydra:view;
        return $this;
    }
    /**
     * 
     *
     * @return BooksIdReviewsGetResponse200HydraSearch
     */
    public function getHydra:search() : BooksIdReviewsGetResponse200HydraSearch
    {
        return $this->hydra:search;
    }
    /**
     * 
     *
     * @param BooksIdReviewsGetResponse200HydraSearch $hydra:search
     *
     * @return self
     */
    public function setHydra:search(BooksIdReviewsGetResponse200HydraSearch $hydra:search) : self
    {
        $this->hydra:search = $hydra:search;
        return $this;
    }
}