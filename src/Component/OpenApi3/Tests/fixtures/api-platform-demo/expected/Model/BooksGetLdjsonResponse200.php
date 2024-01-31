<?php

namespace ApiPlatform\Demo\Model;

class BooksGetLdjsonResponse200 extends \ArrayObject
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
     * @var BookJsonldBookRead[]
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
     * @var BooksGetLdjsonResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var BooksGetLdjsonResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return BookJsonldBookRead[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param BookJsonldBookRead[] $hydraMember
     *
     * @return self
     */
    public function setHydraMember(array $hydraMember) : self
    {
        $this->initialized['hydraMember'] = true;
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
        $this->initialized['hydraTotalItems'] = true;
        $this->hydraTotalItems = $hydraTotalItems;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetLdjsonResponse200HydraView
     */
    public function getHydraView() : BooksGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param BooksGetLdjsonResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(BooksGetLdjsonResponse200HydraView $hydraView) : self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return BooksGetLdjsonResponse200HydraSearch
     */
    public function getHydraSearch() : BooksGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param BooksGetLdjsonResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(BooksGetLdjsonResponse200HydraSearch $hydraSearch) : self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}