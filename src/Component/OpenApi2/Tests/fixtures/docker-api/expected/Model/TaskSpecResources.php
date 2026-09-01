<?php

namespace Docker\Api\Model;

class TaskSpecResources
{
    /**
     * An object describing a limit on resources which can be requested by a task.
     * 
     *
     * @var Limit
     */
    public Limit $limits;
    /**
     * An object describing the resources which can be advertised by a node and
     * requested by a task.
     * 
     *
     * @var ResourceObject
     */
    public ResourceObject $reservation;
}