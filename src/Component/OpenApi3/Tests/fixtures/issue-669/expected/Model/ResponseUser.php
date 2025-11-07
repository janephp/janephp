<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseUser extends \ArrayObject
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
     * @var DatabaseUser
     */
    protected $user;
    /**
     * @return DatabaseUser
     */
    public function getUser(): DatabaseUser
    {
        return $this->user;
    }
    /**
     * @param DatabaseUser $user
     *
     * @return self
     */
    public function setUser(DatabaseUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}