<?php

namespace Docker\Api\Model;

class EventMessage
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
     * The type of object emitting the event
     *
     * @var string
     */
    protected $type;
    /**
     * The type of event
     *
     * @var string
     */
    protected $action;
    /**
    * Actor describes something that generates events, like a container, network,
    or a volume.
    
    *
    * @var EventActor
    */
    protected $actor;
    /**
    * Scope of the event. Engine events are `local` scope. Cluster (Swarm)
    events are `swarm` scope.
    
    *
    * @var string
    */
    protected $scope;
    /**
     * Timestamp of event
     *
     * @var int
     */
    protected $time;
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @var int
     */
    protected $timeNano;
    /**
     * The type of object emitting the event
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of object emitting the event
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The type of event
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * The type of event
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
    * Actor describes something that generates events, like a container, network,
    or a volume.
    
    *
    * @return EventActor
    */
    public function getActor() : EventActor
    {
        return $this->actor;
    }
    /**
    * Actor describes something that generates events, like a container, network,
    or a volume.
    
    *
    * @param EventActor $actor
    *
    * @return self
    */
    public function setActor(EventActor $actor) : self
    {
        $this->initialized['actor'] = true;
        $this->actor = $actor;
        return $this;
    }
    /**
    * Scope of the event. Engine events are `local` scope. Cluster (Swarm)
    events are `swarm` scope.
    
    *
    * @return string
    */
    public function getScope() : string
    {
        return $this->scope;
    }
    /**
    * Scope of the event. Engine events are `local` scope. Cluster (Swarm)
    events are `swarm` scope.
    
    *
    * @param string $scope
    *
    * @return self
    */
    public function setScope(string $scope) : self
    {
        $this->initialized['scope'] = true;
        $this->scope = $scope;
        return $this;
    }
    /**
     * Timestamp of event
     *
     * @return int
     */
    public function getTime() : int
    {
        return $this->time;
    }
    /**
     * Timestamp of event
     *
     * @param int $time
     *
     * @return self
     */
    public function setTime(int $time) : self
    {
        $this->initialized['time'] = true;
        $this->time = $time;
        return $this;
    }
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @return int
     */
    public function getTimeNano() : int
    {
        return $this->timeNano;
    }
    /**
     * Timestamp of event, with nanosecond accuracy
     *
     * @param int $timeNano
     *
     * @return self
     */
    public function setTimeNano(int $timeNano) : self
    {
        $this->initialized['timeNano'] = true;
        $this->timeNano = $timeNano;
        return $this;
    }
}