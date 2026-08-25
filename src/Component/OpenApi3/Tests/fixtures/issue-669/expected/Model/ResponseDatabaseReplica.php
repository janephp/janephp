<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseReplica implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['replica' => ['replica', 'getReplica', 'setReplica']];
    }
}