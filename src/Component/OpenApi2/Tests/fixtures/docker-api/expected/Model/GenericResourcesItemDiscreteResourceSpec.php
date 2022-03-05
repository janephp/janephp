<?php

namespace Docker\Api\Model;

class GenericResourcesItemDiscreteResourceSpec
{
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
        $this->value = $value;
        return $this;
    }
}