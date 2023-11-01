<?php

namespace Docker\Api\Model;

class PluginConfigRootfs
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
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string[]
     */
    protected $diffIds;
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getDiffIds() : array
    {
        return $this->diffIds;
    }
    /**
     * 
     *
     * @param string[] $diffIds
     *
     * @return self
     */
    public function setDiffIds(array $diffIds) : self
    {
        $this->initialized['diffIds'] = true;
        $this->diffIds = $diffIds;
        return $this;
    }
}