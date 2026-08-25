<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class User implements AdditionalPropertiesInterface
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
    public function definedProperties(): array
    {
        return ['kubernetesClusterUser' => ['kubernetes_cluster_user', 'getKubernetesClusterUser', 'setKubernetesClusterUser']];
    }
}