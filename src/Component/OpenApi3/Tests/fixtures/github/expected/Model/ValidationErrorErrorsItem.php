<?php

namespace Github\Model;

class ValidationErrorErrorsItem extends \ArrayObject
{
    /**
     * 
     *
     * @var string
     */
    protected $resource;
    /**
     * 
     *
     * @var string
     */
    protected $field;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var int
     */
    protected $index;
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
    public function getResource() : string
    {
        return $this->resource;
    }
    /**
     * 
     *
     * @param string $resource
     *
     * @return self
     */
    public function setResource(string $resource) : self
    {
        $this->resource = $resource;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getField() : string
    {
        return $this->field;
    }
    /**
     * 
     *
     * @param string $field
     *
     * @return self
     */
    public function setField(string $field) : self
    {
        $this->field = $field;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->message = $message;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code) : self
    {
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIndex() : int
    {
        return $this->index;
    }
    /**
     * 
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index) : self
    {
        $this->index = $index;
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