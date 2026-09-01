<?php

namespace Docker\Api\Model;

class Task
{
    /**
     * The ID of the task.
     *
     * @var string
     */
    public string $iD;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     * 
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     * 
     *
     * @var ObjectVersion
     */
    public ObjectVersion $version;
    /**
     * @var string
     */
    public string $createdAt;
    /**
     * @var string
     */
    public string $updatedAt;
    /**
     * Name of the task.
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
     * User modifiable task configuration.
     *
     * @var TaskSpec
     */
    public TaskSpec $spec;
    /**
     * The ID of the service this task is part of.
     *
     * @var string
     */
    public string $serviceID;
    /**
     * @var int
     */
    public int $slot;
    /**
     * The ID of the node that this task is on.
     *
     * @var string
     */
    public string $nodeID;
    /**
     * User-defined resources can be either Integer resources (e.g, `SSD=3`) or
     * String resources (e.g, `GPU=UUID1`).
     * 
     *
     * @var list<GenericResourcesItem>
     */
    public array $assignedGenericResources;
    /**
     * @var TaskStatus
     */
    public TaskStatus $status;
    /**
     * @var string
     */
    public string $desiredState;
    /**
     * The version number of the object such as node, service, etc. This is needed
     * to avoid conflicting writes. The client must send the version number along
     * with the modified specification when updating these objects.
     * 
     * This approach ensures safe concurrency and determinism in that the change
     * on the object may not be applied if the version number has changed from the
     * last read. In other words, if two update requests specify the same base
     * version, only one of the requests can succeed. As a result, two separate
     * update requests that happen at the same time will not unintentionally
     * overwrite each other.
     * 
     *
     * @var ObjectVersion
     */
    public ObjectVersion $jobIteration;
}