<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseCluster implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['database' => ['database', 'getDatabase', 'setDatabase']];
    }
}