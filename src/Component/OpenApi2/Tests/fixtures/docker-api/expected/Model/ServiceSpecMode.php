<?php

namespace Docker\Api\Model;

class ServiceSpecMode
{
    /**
     * @var ServiceSpecModeReplicated
     */
    public ServiceSpecModeReplicated $replicated;
    /**
     * @var mixed
     */
    public $global;
    /**
     * The mode used for services with a finite number of tasks that run
     * to a completed state.
     * 
     *
     * @var ServiceSpecModeReplicatedJob
     */
    public ServiceSpecModeReplicatedJob $replicatedJob;
    /**
     * The mode used for services which run a task to the completed state
     * on each valid node.
     * 
     *
     * @var mixed
     */
    public $globalJob;
}