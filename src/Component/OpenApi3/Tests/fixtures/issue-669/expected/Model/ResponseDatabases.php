<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseDatabases extends \ArrayObject
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
     * @var list<Database>
     */
    protected $dbs;
    /**
     * @return list<Database>
     */
    public function getDbs(): array
    {
        return $this->dbs;
    }
    /**
     * @param list<Database> $dbs
     *
     * @return self
     */
    public function setDbs(array $dbs): self
    {
        $this->initialized['dbs'] = true;
        $this->dbs = $dbs;
        return $this;
    }
}