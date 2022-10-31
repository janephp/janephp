<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetLdjsonResponse200 extends \ArrayObject
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
     * @var ParchmentJsonld[]
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
     * @var ParchmentsGetLdjsonResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ParchmentsGetLdjsonResponse200HydraSearch
     */
    protected $hydraSearch;
    /**
     * 
     *
     * @return ParchmentJsonld[]
     */
    public function getHydraMember() : array
    {
        return $this->hydraMember;
    }
    /**
     * 
     *
     * @param ParchmentJsonld[] $hydraMember
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
     * @return ParchmentsGetLdjsonResponse200HydraView
     */
    public function getHydraView() : ParchmentsGetLdjsonResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ParchmentsGetLdjsonResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ParchmentsGetLdjsonResponse200HydraView $hydraView) : self
    {
        $this->initialized['hydraView'] = true;
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetLdjsonResponse200HydraSearch
     */
    public function getHydraSearch() : ParchmentsGetLdjsonResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ParchmentsGetLdjsonResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ParchmentsGetLdjsonResponse200HydraSearch $hydraSearch) : self
    {
        $this->initialized['hydraSearch'] = true;
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}