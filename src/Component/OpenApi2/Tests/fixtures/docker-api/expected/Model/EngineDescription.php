<?php

namespace Docker\Api\Model;

class EngineDescription
{
    /**
     * 
     *
     * @var string
     */
    protected $engineVersion;
    /**
     * 
     *
     * @var string[]
     */
    protected $labels;
    /**
     * 
     *
     * @var EngineDescriptionPluginsItem[]
     */
    protected $plugins;
    /**
     * 
     *
     * @return string
     */
    public function getEngineVersion() : string
    {
        return $this->engineVersion;
    }
    /**
     * 
     *
     * @param string $engineVersion
     *
     * @return self
     */
    public function setEngineVersion(string $engineVersion) : self
    {
        $this->engineVersion = $engineVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return EngineDescriptionPluginsItem[]
     */
    public function getPlugins() : array
    {
        return $this->plugins;
    }
    /**
     * 
     *
     * @param EngineDescriptionPluginsItem[] $plugins
     *
     * @return self
     */
    public function setPlugins(array $plugins) : self
    {
        $this->plugins = $plugins;
        return $this;
    }
}