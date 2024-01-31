<?php

namespace Github\Model;

class ScimUserOperationsItem extends \ArrayObject
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
    protected $op;
    /**
     * 
     *
     * @var string
     */
    protected $path;
    /**
     * 
     *
     * @var mixed
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getOp() : string
    {
        return $this->op;
    }
    /**
     * 
     *
     * @param string $op
     *
     * @return self
     */
    public function setOp(string $op) : self
    {
        $this->initialized['op'] = true;
        $this->op = $op;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }
    /**
     * 
     *
     * @param string $path
     *
     * @return self
     */
    public function setPath(string $path) : self
    {
        $this->initialized['path'] = true;
        $this->path = $path;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}