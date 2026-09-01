<?php

namespace Docker\Api\Model;

class SwarmSpecTaskDefaults
{
    /**
     * The log driver to use for tasks created in the orchestrator if
     * unspecified by a service.
     * 
     * Updating this value only affects new tasks. Existing tasks continue
     * to use their previously configured log driver until recreated.
     * 
     *
     * @var SwarmSpecTaskDefaultsLogDriver
     */
    public SwarmSpecTaskDefaultsLogDriver $logDriver;
}