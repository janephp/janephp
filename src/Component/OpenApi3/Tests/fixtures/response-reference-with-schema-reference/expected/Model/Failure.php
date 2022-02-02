<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class Failure
{
    /**
     * 
     *
     * @var Error[]
     */
    protected $errors;
    /**
     * 
     *
     * @return Error[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param Error[] $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->errors = $errors;
        return $this;
    }
}