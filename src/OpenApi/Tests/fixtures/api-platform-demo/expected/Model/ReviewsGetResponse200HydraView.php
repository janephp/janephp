<?php

namespace ApiPlatform\Demo\Model;

class ReviewsGetResponse200HydraView
{
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
        $this->hydraLast = $hydraLast;
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
        $this->hydraNext = $hydraNext;
        return $this;
    }
}