<?php

namespace Docker\Api\Model;

class ServiceSpecModeReplicated
{
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
        $this->replicas = $replicas;
        return $this;
    }
}