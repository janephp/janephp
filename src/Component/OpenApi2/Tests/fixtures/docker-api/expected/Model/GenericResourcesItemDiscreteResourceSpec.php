<?php

namespace Docker\Api\Model;

class GenericResourcesItemDiscreteResourceSpec
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
    protected $kind;
    /**
     * 
     *
     * @var int
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getKind() : string
    {
        return $this->kind;
    }
    /**
     * 
     *
     * @param string $kind
     *
     * @return self
     */
    public function setKind(string $kind) : self
    {
        $this->initialized['kind'] = true;
        $this->kind = $kind;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}