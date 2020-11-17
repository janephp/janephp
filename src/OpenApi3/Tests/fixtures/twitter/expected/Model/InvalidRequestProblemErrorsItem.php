<?php

namespace Jane\OpenApi3\Tests\Expected\Model;

class InvalidRequestProblemErrorsItem
{
    /**
     * 
     *
     * @var array<string, string[]>
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
     * @return array<string, string[]>
     */
    public function getParameters() : iterable
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param array<string, string[]> $parameters
     *
     * @return self
     */
    public function setParameters(iterable $parameters) : self
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