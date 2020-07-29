<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class InvalidRequestProblemErrorsItem
{
    /**
     * 
     *
     * @var \ArrayObject
     */
    protected $parameters;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @return \ArrayObject
     */
    public function getParameters() : \ArrayObject
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param \ArrayObject $parameters
     *
     * @return self
     */
    public function setParameters(\ArrayObject $parameters) : self
    {
        $this->parameters = $parameters;
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
}