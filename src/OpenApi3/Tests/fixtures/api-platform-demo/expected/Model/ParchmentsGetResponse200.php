<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetResponse200
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
     * @var ParchmentsGetResponse200HydraView
     */
    protected $hydraView;
    /**
     * 
     *
     * @var ParchmentsGetResponse200HydraSearch
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
     * @return ParchmentsGetResponse200HydraView
     */
    public function getHydraView() : ParchmentsGetResponse200HydraView
    {
        return $this->hydraView;
    }
    /**
     * 
     *
     * @param ParchmentsGetResponse200HydraView $hydraView
     *
     * @return self
     */
    public function setHydraView(ParchmentsGetResponse200HydraView $hydraView) : self
    {
        $this->hydraView = $hydraView;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetResponse200HydraSearch
     */
    public function getHydraSearch() : ParchmentsGetResponse200HydraSearch
    {
        return $this->hydraSearch;
    }
    /**
     * 
     *
     * @param ParchmentsGetResponse200HydraSearch $hydraSearch
     *
     * @return self
     */
    public function setHydraSearch(ParchmentsGetResponse200HydraSearch $hydraSearch) : self
    {
        $this->hydraSearch = $hydraSearch;
        return $this;
    }
}