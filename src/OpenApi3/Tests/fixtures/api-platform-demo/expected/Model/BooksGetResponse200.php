<?php

namespace ApiPlatform\Demo\Model;

class BooksGetResponse200
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
     * @var BooksGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var BooksGetResponse200HydraSearch
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
     * @return BooksGetResponse200HydraView
     */
    public function getHydraView() : BooksGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param BooksGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(BooksGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetResponse200HydraSearch
     */
    public function getHydraSearch() : BooksGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param BooksGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(BooksGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}