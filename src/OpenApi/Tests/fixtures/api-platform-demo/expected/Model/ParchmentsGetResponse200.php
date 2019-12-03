<?php

namespace ApiPlatform\Demo\Model;

class ParchmentsGetResponse200
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
     * @var ParchmentsGetResponse200HydraView
     */
    protected $hydra:view;
    /**
     * 
     *
     * @var ParchmentsGetResponse200HydraSearch
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
     * @return ParchmentsGetResponse200HydraView
     */
    public function getHydra:view() : ParchmentsGetResponse200HydraView
    {
        return $this->hydra:view;
    }
    /**
     * 
     *
     * @param ParchmentsGetResponse200HydraView $hydra:view
     *
     * @return self
     */
    public function setHydra:view(ParchmentsGetResponse200HydraView $hydra:view) : self
    {
        $this->hydra:view = $hydra:view;
        return $this;
    }
    /**
     * 
     *
     * @return ParchmentsGetResponse200HydraSearch
     */
    public function getHydra:search() : ParchmentsGetResponse200HydraSearch
    {
        return $this->hydra:search;
    }
    /**
     * 
     *
     * @param ParchmentsGetResponse200HydraSearch $hydra:search
     *
     * @return self
     */
    public function setHydra:search(ParchmentsGetResponse200HydraSearch $hydra:search) : self
    {
        $this->hydra:search = $hydra:search;
        return $this;
    }
}