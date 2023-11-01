<?php

namespace Github\Model;

class TeamsTeamIdMembersUsernamePutResponse422ErrorsItem extends \ArrayObject
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
    protected $code;
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
    protected $resource;
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
        $this->initialized['code'] = true;
        $this->code = $code;
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
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
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
        $this->initialized['resource'] = true;
        $this->resource = $resource;
        return $this;
    }
}