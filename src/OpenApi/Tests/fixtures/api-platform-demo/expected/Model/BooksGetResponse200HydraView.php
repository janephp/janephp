<?php

namespace ApiPlatform\Demo\Model;

class BooksGetResponse200HydraView
{
    /**
     * 
     *
     * @var string
     */
    protected $@id;
    /**
     * 
     *
     * @var string
     */
    protected $@type;
    /**
     * 
     *
     * @var string
     */
    protected $hydra:first;
    /**
     * 
     *
     * @var string
     */
    protected $hydra:last;
    /**
     * 
     *
     * @var string
     */
    protected $hydra:next;
    /**
     * 
     *
     * @return string
     */
    public function get@id() : string
    {
        return $this->@id;
    }
    /**
     * 
     *
     * @param string $@id
     *
     * @return self
     */
    public function set@id(string $@id) : self
    {
        $this->@id = $@id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function get@type() : string
    {
        return $this->@type;
    }
    /**
     * 
     *
     * @param string $@type
     *
     * @return self
     */
    public function set@type(string $@type) : self
    {
        $this->@type = $@type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydra:first() : string
    {
        return $this->hydra:first;
    }
    /**
     * 
     *
     * @param string $hydra:first
     *
     * @return self
     */
    public function setHydra:first(string $hydra:first) : self
    {
        $this->hydra:first = $hydra:first;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydra:last() : string
    {
        return $this->hydra:last;
    }
    /**
     * 
     *
     * @param string $hydra:last
     *
     * @return self
     */
    public function setHydra:last(string $hydra:last) : self
    {
        $this->hydra:last = $hydra:last;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHydra:next() : string
    {
        return $this->hydra:next;
    }
    /**
     * 
     *
     * @param string $hydra:next
     *
     * @return self
     */
    public function setHydra:next(string $hydra:next) : self
    {
        $this->hydra:next = $hydra:next;
        return $this;
    }
}