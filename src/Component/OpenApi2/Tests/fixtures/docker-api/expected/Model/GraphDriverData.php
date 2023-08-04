<?php

namespace Docker\Api\Model;

class GraphDriverData
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var array<string, string>
     */
    protected $data;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>
     */
    public function getData() : iterable
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param array<string, string> $data
     *
     * @return self
     */
    public function setData(iterable $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}