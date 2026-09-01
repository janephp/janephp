<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseReplica implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var DatabaseReplicaRead
     */
    public DatabaseReplicaRead $replica;
    public function definedProperties(): array
    {
        return ['replica' => 'replica'];
    }
}