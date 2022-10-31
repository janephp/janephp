<?php

namespace ApiPlatform\Demo\Model;

class TopBooksGetLdjsonResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var TopBookJsonld[]
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
     * @var TopBooksGetLdjsonResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var TopBooksGetLdjsonResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return TopBookJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param TopBookJsonld[] $hydraMember
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
     * @return TopBooksGetLdjsonResponse200HydraView
     */
    public function getHydraView() : TopBooksGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param TopBooksGetLdjsonResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(TopBooksGetLdjsonResponse200HydraView $hydraView) : self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return TopBooksGetLdjsonResponse200HydraSearch
     */
    public function getHydraSearch() : TopBooksGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param TopBooksGetLdjsonResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(TopBooksGetLdjsonResponse200HydraSearch $hydraSearch) : self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}