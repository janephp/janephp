<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class User implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var UserKubernetesClusterUser
     */
    public UserKubernetesClusterUser $kubernetesClusterUser;
    public function definedProperties(): array
    {
        return ['kubernetesClusterUser' => 'kubernetes_cluster_user'];
    }
}