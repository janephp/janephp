<?php

namespace Docker\Api\Model;

class SwarmSpec
{
    /**
     * Name of the swarm.
     *
     * @var string
     */
    public string $name;
    /**
     * User-defined key/value metadata.
     *
     * @var array<string, string>
     */
    public iterable $labels;
    /**
     * Orchestration configuration.
     *
     * @var SwarmSpecOrchestration|null
     */
    public ?SwarmSpecOrchestration $orchestration;
    /**
     * Raft configuration.
     *
     * @var SwarmSpecRaft
     */
    public SwarmSpecRaft $raft;
    /**
     * Dispatcher configuration.
     *
     * @var SwarmSpecDispatcher|null
     */
    public ?SwarmSpecDispatcher $dispatcher;
    /**
     * CA configuration.
     *
     * @var SwarmSpecCAConfig|null
     */
    public ?SwarmSpecCAConfig $cAConfig;
    /**
     * Parameters related to encryption-at-rest.
     *
     * @var SwarmSpecEncryptionConfig
     */
    public SwarmSpecEncryptionConfig $encryptionConfig;
    /**
     * Defaults for creating tasks in this cluster.
     *
     * @var SwarmSpecTaskDefaults
     */
    public SwarmSpecTaskDefaults $taskDefaults;
}