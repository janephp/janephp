<?php

namespace Github\Model;

class Hovercard extends \ArrayObject
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
     * @var HovercardContextsItem[]
     */
    protected $contexts;
    /**
     * 
     *
     * @return HovercardContextsItem[]
     */
    public function getContexts() : array
    {
        return $this->contexts;
    }
    /**
     * 
     *
     * @param HovercardContextsItem[] $contexts
     *
     * @return self
     */
    public function setContexts(array $contexts) : self
    {
        $this->initialized['contexts'] = true;
        $this->contexts = $contexts;
        return $this;
    }
}