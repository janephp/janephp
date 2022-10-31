<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class InvalidRequestProblemErrorsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getParameters() : iterable
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
    public function setParameters(iterable $parameters) : self
    {
        $this->initialized['parameters'] = true;
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
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}