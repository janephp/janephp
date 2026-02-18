<?php

namespace Jane\Generated\DigitalOcean\Model;

class User extends \ArrayObject
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
     * @var UserKubernetesClusterUser
     */
    protected $kubernetesClusterUser;
    /**
     * @return UserKubernetesClusterUser
     */
    public function getKubernetesClusterUser(): UserKubernetesClusterUser
    {
        return $this->kubernetesClusterUser;
    }
    /**
     * @param UserKubernetesClusterUser $kubernetesClusterUser
     *
     * @return self
     */
    public function setKubernetesClusterUser(UserKubernetesClusterUser $kubernetesClusterUser): self
    {
        $this->initialized['kubernetesClusterUser'] = true;
        $this->kubernetesClusterUser = $kubernetesClusterUser;
        return $this;
    }
}