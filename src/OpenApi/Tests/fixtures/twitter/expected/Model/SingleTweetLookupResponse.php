<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class SingleTweetLookupResponse
{
    /**
     * 
     *
     * @var mixed
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
     * @var mixed[]
     */
    protected $errors;
    /**
     * 
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param mixed $data
     *
     * @return self
     */
    public function setData($data) : self
    {
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
        $this->includes = $includes;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param mixed[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}