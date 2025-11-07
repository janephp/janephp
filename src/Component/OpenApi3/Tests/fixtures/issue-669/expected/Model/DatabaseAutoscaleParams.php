<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseAutoscaleParams extends \ArrayObject
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
     * @var DatabaseAutoscaleParamsStorage
     */
    protected $storage;
    /**
     * @return DatabaseAutoscaleParamsStorage
     */
    public function getStorage(): DatabaseAutoscaleParamsStorage
    {
        return $this->storage;
    }
    /**
     * @param DatabaseAutoscaleParamsStorage $storage
     *
     * @return self
     */
    public function setStorage(DatabaseAutoscaleParamsStorage $storage): self
    {
        $this->initialized['storage'] = true;
        $this->storage = $storage;
        return $this;
    }
}