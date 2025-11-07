<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDatabaseReplica extends \ArrayObject
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
     * @var DatabaseReplicaRead
     */
    protected $replica;
    /**
     * @return DatabaseReplicaRead
     */
    public function getReplica(): DatabaseReplicaRead
    {
        return $this->replica;
    }
    /**
     * @param DatabaseReplicaRead $replica
     *
     * @return self
     */
    public function setReplica(DatabaseReplicaRead $replica): self
    {
        $this->initialized['replica'] = true;
        $this->replica = $replica;
        return $this;
    }
}