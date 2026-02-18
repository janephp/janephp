<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDatabaseClusters extends \ArrayObject
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
     * @var list<DatabaseClusterRead>
     */
    protected $databases;
    /**
     * @return list<DatabaseClusterRead>
     */
    public function getDatabases(): array
    {
        return $this->databases;
    }
    /**
     * @param list<DatabaseClusterRead> $databases
     *
     * @return self
     */
    public function setDatabases(array $databases): self
    {
        $this->initialized['databases'] = true;
        $this->databases = $databases;
        return $this;
    }
}