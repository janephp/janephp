<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDatabaseCluster extends \ArrayObject
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
     * @var DatabaseClusterRead
     */
    protected $database;
    /**
     * @return DatabaseClusterRead
     */
    public function getDatabase(): DatabaseClusterRead
    {
        return $this->database;
    }
    /**
     * @param DatabaseClusterRead $database
     *
     * @return self
     */
    public function setDatabase(DatabaseClusterRead $database): self
    {
        $this->initialized['database'] = true;
        $this->database = $database;
        return $this;
    }
}