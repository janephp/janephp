<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseAutoscale extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Contains all autoscaling configuration for a database cluster
     *
     * @var DatabaseAutoscaleParams
     */
    protected $autoscale;
    /**
     * Contains all autoscaling configuration for a database cluster
     *
     * @return DatabaseAutoscaleParams
     */
    public function getAutoscale(): DatabaseAutoscaleParams
    {
        return $this->autoscale;
    }
    /**
     * Contains all autoscaling configuration for a database cluster
     *
     * @param DatabaseAutoscaleParams $autoscale
     *
     * @return self
     */
    public function setAutoscale(DatabaseAutoscaleParams $autoscale): self
    {
        $this->initialized['autoscale'] = true;
        $this->autoscale = $autoscale;
        return $this;
    }
}