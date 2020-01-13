<?php

namespace Jane\OpenApi\Tests\Expected\Model;

class InvalidRequestProblemErrorsItem
{
    /**
     * 
     *
     * @var string[][]
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
     * @return string[][]
     */
    public function getParameters() : \ArrayObject
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param string[][] $parameters
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