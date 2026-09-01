<?php

namespace Docker\Api\Model;

class EventMessage
{
    /**
     * The type of object emitting the event
     *
     * @var string
     */
    public string $type;
    /**
     * The type of event
     *
     * @var string
     */
    public string $action;
    /**
     * Actor describes something that generates events, like a container, network,
     * or a volume.
     * 
     *
     * @var EventActor
     */
    public EventActor $actor;
    /**
     * Scope of the event. Engine events are `local` scope. Cluster (Swarm)
     * events are `swarm` scope.
     * 
     *
     * @var string
     */
    public string $scope;
    /**
     * Timestamp of event
     *
     * @var int
     */
    public int $time;
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @var int
     */
    public int $timeNano;
}