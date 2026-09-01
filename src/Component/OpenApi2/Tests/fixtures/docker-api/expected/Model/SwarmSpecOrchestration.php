<?php

namespace Docker\Api\Model;

class SwarmSpecOrchestration
{
    /**
     * The number of historic tasks to keep per instance or node. If
     * negative, never remove completed or failed tasks.
     * 
     *
     * @var int
     */
    public int $taskHistoryRetentionLimit;
}