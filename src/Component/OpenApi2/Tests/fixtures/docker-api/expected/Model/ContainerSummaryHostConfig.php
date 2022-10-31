<?php

namespace Docker\Api\Model;

class ContainerSummaryHostConfig
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
     * @var string
     */
    protected $networkMode;
    /**
     * 
     *
     * @return string
     */
    public function getNetworkMode() : string
    {
        return $this->networkMode;
    }
    /**
     * 
     *
     * @param string $networkMode
     *
     * @return self
     */
    public function setNetworkMode(string $networkMode) : self
    {
        $this->initialized['networkMode'] = true;
        $this->networkMode = $networkMode;
        return $this;
    }
}