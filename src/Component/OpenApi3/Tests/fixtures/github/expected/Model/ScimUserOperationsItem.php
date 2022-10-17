<?php

namespace Github\Model;

class ScimUserOperationsItem extends \ArrayObject
{
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
        $this->value = $value;
        return $this;
    }
}