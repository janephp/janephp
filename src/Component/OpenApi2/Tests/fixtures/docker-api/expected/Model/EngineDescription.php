<?php

namespace Docker\Api\Model;

class EngineDescription
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
    protected $engineVersion;
    /**
     * 
     *
     * @var array<string, string>
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
        $this->initialized['engineVersion'] = true;
        $this->engineVersion = $engineVersion;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, string>
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param array<string, string> $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
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
        $this->initialized['plugins'] = true;
        $this->plugins = $plugins;
        return $this;
    }
}