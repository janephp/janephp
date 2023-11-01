<?php

namespace Jane\Component\OpenApi3\JsonSchema\Model;

class Responses extends \ArrayObject
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
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
}