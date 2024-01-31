<?php

namespace ApiPlatform\Demo\Model;

class TopBooksGetLdjsonResponse200HydraView extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string
     */
    protected $hydraFirst;
    /**
     * 
     *
     * @var string
     */
    protected $hydraLast;
    /**
     * 
     *
     * @var string
     */
    protected $hydraPrevious;
    /**
     * 
     *
     * @var string
     */
    protected $hydraNext;
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydraFirst() : string
    {
        return $this->hydraFirst;
    }
    /**
     * 
     *
     * @param string $hydraFirst
     *
     * @return self
     */
    public function setHydraFirst(string $hydraFirst) : self
    {
        $this->initialized['hydraFirst'] = true;
        $this->hydraFirst = $hydraFirst;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydraLast() : string
    {
        return $this->hydraLast;
    }
    /**
     * 
     *
     * @param string $hydraLast
     *
     * @return self
     */
    public function setHydraLast(string $hydraLast) : self
    {
        $this->initialized['hydraLast'] = true;
        $this->hydraLast = $hydraLast;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydraPrevious() : string
    {
        return $this->hydraPrevious;
    }
    /**
     * 
     *
     * @param string $hydraPrevious
     *
     * @return self
     */
    public function setHydraPrevious(string $hydraPrevious) : self
    {
        $this->initialized['hydraPrevious'] = true;
        $this->hydraPrevious = $hydraPrevious;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydraNext() : string
    {
        return $this->hydraNext;
    }
    /**
     * 
     *
     * @param string $hydraNext
     *
     * @return self
     */
    public function setHydraNext(string $hydraNext) : self
    {
        $this->initialized['hydraNext'] = true;
        $this->hydraNext = $hydraNext;
        return $this;
    }
}