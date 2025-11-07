<?php

namespace Jane\Generated\DigitalOcean\Model;

class ResponseUsers extends \ArrayObject
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
     * @var list<DatabaseUser>
     */
    protected $users;
    /**
     * @return list<DatabaseUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }
    /**
     * @param list<DatabaseUser> $users
     *
     * @return self
     */
    public function setUsers(array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
}