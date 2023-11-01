<?php

namespace Docker\Api\Model;

class ServiceSpecModeReplicated
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
     * @var int
     */
    protected $replicas;
    /**
     * 
     *
     * @return int
     */
    public function getReplicas() : int
    {
        return $this->replicas;
    }
    /**
     * 
     *
     * @param int $replicas
     *
     * @return self
     */
    public function setReplicas(int $replicas) : self
    {
        $this->initialized['replicas'] = true;
        $this->replicas = $replicas;
        return $this;
    }
}