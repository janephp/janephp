<?php

namespace Docker\Api\Model;

class GraphDriverData
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string[]
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
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getData() : iterable
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string[] $data
     *
     * @return self
     */
    public function setData(iterable $data) : self
    {
        $this->data = $data;
        return $this;
    }
}