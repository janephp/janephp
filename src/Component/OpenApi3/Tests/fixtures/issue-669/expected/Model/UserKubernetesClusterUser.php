<?php

namespace Jane\Generated\DigitalOcean\Model;

class UserKubernetesClusterUser extends \ArrayObject
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
     * The username for the cluster admin user.
     *
     * @var string
     */
    protected $username;
    /**
     * A list of in-cluster groups that the user belongs to.
     *
     * @var list<string>
     */
    protected $groups;
    /**
     * The username for the cluster admin user.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * The username for the cluster admin user.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
        return $this;
    }
    /**
     * A list of in-cluster groups that the user belongs to.
     *
     * @return list<string>
     */
    public function getGroups(): array
    {
        return $this->groups;
    }
    /**
     * A list of in-cluster groups that the user belongs to.
     *
     * @param list<string> $groups
     *
     * @return self
     */
    public function setGroups(array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
        return $this;
    }
}