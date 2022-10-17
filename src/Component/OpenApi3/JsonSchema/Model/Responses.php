<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Responses extends \ArrayObject
{
    /**
     * 
     *
     * @var Response|Reference|null
     */
    protected $default;
    /**
     * 
     *
     * @return Response|Reference|null
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * 
     *
     * @param Response|Reference|null $default
     *
     * @return self
     */
    public function setDefault($default) : self
    {
        $this->default = $default;
        return $this;
    }
}