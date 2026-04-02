<?php

namespace Jane\Component\OpenApi31\Tests\Expected\Model;

class ProjectProposal
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
     * @var User|null
     */
    protected $users;
    /**
     * @return User|null
     */
    public function getUsers(): ?User
    {
        return $this->users;
    }
    /**
     * @param User|null $users
     *
     * @return self
     */
    public function setUsers(?User $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;
        return $this;
    }
}