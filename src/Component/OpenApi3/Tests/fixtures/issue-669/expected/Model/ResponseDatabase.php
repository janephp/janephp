<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabase implements AdditionalPropertiesInterface
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
     * @var Database
     */
    protected $db;
    /**
     * @return Database
     */
    public function getDb(): Database
    {
        return $this->db;
    }
    /**
     * @param Database $db
     *
     * @return self
     */
    public function setDb(Database $db): self
    {
        $this->initialized['db'] = true;
        $this->db = $db;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['db' => ['db', 'getDb', 'setDb']];
    }
}