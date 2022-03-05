<?php

namespace Docker\Api\Model;

class PluginConfigRootfs
{
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
        $this->diffIds = $diffIds;
        return $this;
    }
}