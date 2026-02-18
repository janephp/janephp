<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDatabaseReplicas extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<DatabaseReplicaRead>
     */
    protected $replicas;
    /**
     * @return list<DatabaseReplicaRead>
     */
    public function getReplicas(): array
    {
        return $this->replicas;
    }
    /**
     * @param list<DatabaseReplicaRead> $replicas
     *
     * @return self
     */
    public function setReplicas(array $replicas): self
    {
        $this->initialized['replicas'] = true;
        $this->replicas = $replicas;
        return $this;
    }
}