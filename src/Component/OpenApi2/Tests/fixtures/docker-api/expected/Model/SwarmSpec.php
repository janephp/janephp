<?php

namespace Docker\Api\Model;

class SwarmSpec
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
     * Name of the swarm.
     *
     * @var string
     */
    protected $name;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;
    /**
     * Orchestration configuration.
     *
     * @var SwarmSpecOrchestration|null
     */
    protected $orchestration;
    /**
     * Raft configuration.
     *
     * @var SwarmSpecRaft
     */
    protected $raft;
    /**
     * Dispatcher configuration.
     *
     * @var SwarmSpecDispatcher|null
     */
    protected $dispatcher;
    /**
     * CA configuration.
     *
     * @var SwarmSpecCAConfig|null
     */
    protected $cAConfig;
    /**
     * Parameters related to encryption-at-rest.
     *
     * @var SwarmSpecEncryptionConfig
     */
    protected $encryptionConfig;
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @var SwarmSpecTaskDefaults
     */
    protected $taskDefaults;
    /**
     * Name of the swarm.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the swarm.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
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
     * Orchestration configuration.
     *
     * @return SwarmSpecOrchestration|null
     */
    public function getOrchestration() : ?SwarmSpecOrchestration
    {
        return $this->orchestration;
    }
    /**
     * Orchestration configuration.
     *
     * @param SwarmSpecOrchestration|null $orchestration
     *
     * @return self
     */
    public function setOrchestration(?SwarmSpecOrchestration $orchestration) : self
    {
        $this->initialized['orchestration'] = true;
        $this->orchestration = $orchestration;
        return $this;
    }
    /**
     * Raft configuration.
     *
     * @return SwarmSpecRaft
     */
    public function getRaft() : SwarmSpecRaft
    {
        return $this->raft;
    }
    /**
     * Raft configuration.
     *
     * @param SwarmSpecRaft $raft
     *
     * @return self
     */
    public function setRaft(SwarmSpecRaft $raft) : self
    {
        $this->initialized['raft'] = true;
        $this->raft = $raft;
        return $this;
    }
    /**
     * Dispatcher configuration.
     *
     * @return SwarmSpecDispatcher|null
     */
    public function getDispatcher() : ?SwarmSpecDispatcher
    {
        return $this->dispatcher;
    }
    /**
     * Dispatcher configuration.
     *
     * @param SwarmSpecDispatcher|null $dispatcher
     *
     * @return self
     */
    public function setDispatcher(?SwarmSpecDispatcher $dispatcher) : self
    {
        $this->initialized['dispatcher'] = true;
        $this->dispatcher = $dispatcher;
        return $this;
    }
    /**
     * CA configuration.
     *
     * @return SwarmSpecCAConfig|null
     */
    public function getCAConfig() : ?SwarmSpecCAConfig
    {
        return $this->cAConfig;
    }
    /**
     * CA configuration.
     *
     * @param SwarmSpecCAConfig|null $cAConfig
     *
     * @return self
     */
    public function setCAConfig(?SwarmSpecCAConfig $cAConfig) : self
    {
        $this->initialized['cAConfig'] = true;
        $this->cAConfig = $cAConfig;
        return $this;
    }
    /**
     * Parameters related to encryption-at-rest.
     *
     * @return SwarmSpecEncryptionConfig
     */
    public function getEncryptionConfig() : SwarmSpecEncryptionConfig
    {
        return $this->encryptionConfig;
    }
    /**
     * Parameters related to encryption-at-rest.
     *
     * @param SwarmSpecEncryptionConfig $encryptionConfig
     *
     * @return self
     */
    public function setEncryptionConfig(SwarmSpecEncryptionConfig $encryptionConfig) : self
    {
        $this->initialized['encryptionConfig'] = true;
        $this->encryptionConfig = $encryptionConfig;
        return $this;
    }
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @return SwarmSpecTaskDefaults
     */
    public function getTaskDefaults() : SwarmSpecTaskDefaults
    {
        return $this->taskDefaults;
    }
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @param SwarmSpecTaskDefaults $taskDefaults
     *
     * @return self
     */
    public function setTaskDefaults(SwarmSpecTaskDefaults $taskDefaults) : self
    {
        $this->initialized['taskDefaults'] = true;
        $this->taskDefaults = $taskDefaults;
        return $this;
    }
}