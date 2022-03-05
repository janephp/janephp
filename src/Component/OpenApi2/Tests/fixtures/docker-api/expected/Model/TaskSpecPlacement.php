<?php

namespace Docker\Api\Model;

class TaskSpecPlacement
{
    /**
    * An array of constraint expressions to limit the set of nodes where
    a task can be scheduled. Constraint expressions can either use a
    _match_ (`==`) or _exclude_ (`!=`) rule. Multiple constraints find
    nodes that satisfy every expression (AND match). Constraints can
    match node or Docker Engine labels as follows:
    
    node attribute       | matches                        | example
    ---------------------|--------------------------------|-----------------------------------------------
    `node.id`            | Node ID                        | `node.id==2ivku8v2gvtg4`
    `node.hostname`      | Node hostname                  | `node.hostname!=node-2`
    `node.role`          | Node role (`manager`/`worker`) | `node.role==manager`
    `node.platform.os`   | Node operating system          | `node.platform.os==windows`
    `node.platform.arch` | Node architecture              | `node.platform.arch==x86_64`
    `node.labels`        | User-defined node labels       | `node.labels.security==high`
    `engine.labels`      | Docker Engine's labels         | `engine.labels.operatingsystem==ubuntu-14.04`
    
    `engine.labels` apply to Docker Engine labels like operating system,
    drivers, etc. Swarm administrators add `node.labels` for operational
    purposes by using the [`node update endpoint`](#operation/NodeUpdate).
    
    *
    * @var string[]
    */
    protected $constraints;
    /**
    * Preferences provide a way to make the scheduler aware of factors
    such as topology. They are provided in order from highest to
    lowest precedence.
    
    *
    * @var TaskSpecPlacementPreferencesItem[]
    */
    protected $preferences;
    /**
    * Maximum number of replicas for per node (default value is 0, which
    is unlimited)
    
    *
    * @var int
    */
    protected $maxReplicas = 0;
    /**
    * Platforms stores all the platforms that the service's image can
    run on. This field is used in the platform filter for scheduling.
    If empty, then the platform filter is off, meaning there are no
    scheduling restrictions.
    
    *
    * @var Platform[]
    */
    protected $platforms;
    /**
    * An array of constraint expressions to limit the set of nodes where
    a task can be scheduled. Constraint expressions can either use a
    _match_ (`==`) or _exclude_ (`!=`) rule. Multiple constraints find
    nodes that satisfy every expression (AND match). Constraints can
    match node or Docker Engine labels as follows:
    
    node attribute       | matches                        | example
    ---------------------|--------------------------------|-----------------------------------------------
    `node.id`            | Node ID                        | `node.id==2ivku8v2gvtg4`
    `node.hostname`      | Node hostname                  | `node.hostname!=node-2`
    `node.role`          | Node role (`manager`/`worker`) | `node.role==manager`
    `node.platform.os`   | Node operating system          | `node.platform.os==windows`
    `node.platform.arch` | Node architecture              | `node.platform.arch==x86_64`
    `node.labels`        | User-defined node labels       | `node.labels.security==high`
    `engine.labels`      | Docker Engine's labels         | `engine.labels.operatingsystem==ubuntu-14.04`
    
    `engine.labels` apply to Docker Engine labels like operating system,
    drivers, etc. Swarm administrators add `node.labels` for operational
    purposes by using the [`node update endpoint`](#operation/NodeUpdate).
    
    *
    * @return string[]
    */
    public function getConstraints() : array
    {
        return $this->constraints;
    }
    /**
    * An array of constraint expressions to limit the set of nodes where
    a task can be scheduled. Constraint expressions can either use a
    _match_ (`==`) or _exclude_ (`!=`) rule. Multiple constraints find
    nodes that satisfy every expression (AND match). Constraints can
    match node or Docker Engine labels as follows:
    
    node attribute       | matches                        | example
    ---------------------|--------------------------------|-----------------------------------------------
    `node.id`            | Node ID                        | `node.id==2ivku8v2gvtg4`
    `node.hostname`      | Node hostname                  | `node.hostname!=node-2`
    `node.role`          | Node role (`manager`/`worker`) | `node.role==manager`
    `node.platform.os`   | Node operating system          | `node.platform.os==windows`
    `node.platform.arch` | Node architecture              | `node.platform.arch==x86_64`
    `node.labels`        | User-defined node labels       | `node.labels.security==high`
    `engine.labels`      | Docker Engine's labels         | `engine.labels.operatingsystem==ubuntu-14.04`
    
    `engine.labels` apply to Docker Engine labels like operating system,
    drivers, etc. Swarm administrators add `node.labels` for operational
    purposes by using the [`node update endpoint`](#operation/NodeUpdate).
    
    *
    * @param string[] $constraints
    *
    * @return self
    */
    public function setConstraints(array $constraints) : self
    {
        $this->constraints = $constraints;
        return $this;
    }
    /**
    * Preferences provide a way to make the scheduler aware of factors
    such as topology. They are provided in order from highest to
    lowest precedence.
    
    *
    * @return TaskSpecPlacementPreferencesItem[]
    */
    public function getPreferences() : array
    {
        return $this->preferences;
    }
    /**
    * Preferences provide a way to make the scheduler aware of factors
    such as topology. They are provided in order from highest to
    lowest precedence.
    
    *
    * @param TaskSpecPlacementPreferencesItem[] $preferences
    *
    * @return self
    */
    public function setPreferences(array $preferences) : self
    {
        $this->preferences = $preferences;
        return $this;
    }
    /**
    * Maximum number of replicas for per node (default value is 0, which
    is unlimited)
    
    *
    * @return int
    */
    public function getMaxReplicas() : int
    {
        return $this->maxReplicas;
    }
    /**
    * Maximum number of replicas for per node (default value is 0, which
    is unlimited)
    
    *
    * @param int $maxReplicas
    *
    * @return self
    */
    public function setMaxReplicas(int $maxReplicas) : self
    {
        $this->maxReplicas = $maxReplicas;
        return $this;
    }
    /**
    * Platforms stores all the platforms that the service's image can
    run on. This field is used in the platform filter for scheduling.
    If empty, then the platform filter is off, meaning there are no
    scheduling restrictions.
    
    *
    * @return Platform[]
    */
    public function getPlatforms() : array
    {
        return $this->platforms;
    }
    /**
    * Platforms stores all the platforms that the service's image can
    run on. This field is used in the platform filter for scheduling.
    If empty, then the platform filter is off, meaning there are no
    scheduling restrictions.
    
    *
    * @param Platform[] $platforms
    *
    * @return self
    */
    public function setPlatforms(array $platforms) : self
    {
        $this->platforms = $platforms;
        return $this;
    }
}