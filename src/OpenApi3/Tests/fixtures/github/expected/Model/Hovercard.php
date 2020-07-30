<?php

namespace Github\Model;

class Hovercard
{
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
        $this->contexts = $contexts;
        return $this;
    }
}