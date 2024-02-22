<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class TweetLookupResponse extends \ArrayObject
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
     * @var list<mixed>
     */
    protected $data;
    /**
     * 
     *
     * @var Expansions
     */
    protected $includes;
    /**
     * 
     *
     * @var list<mixed>
     */
    protected $errors;
    /**
     * 
     *
     * @return list<mixed>
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param list<mixed> $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return Expansions
     */
    public function getIncludes() : Expansions
    {
        return $this->includes;
    }
    /**
     * 
     *
     * @param Expansions $includes
     *
     * @return self
     */
    public function setIncludes(Expansions $includes) : self
    {
        $this->initialized['includes'] = true;
        $this->includes = $includes;
        return $this;
    }
    /**
     * 
     *
     * @return list<mixed>
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<mixed> $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}