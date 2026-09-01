<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class UserKubernetesClusterUser implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The username for the cluster admin user.
     *
     * @var string
     */
    public string $username;
    /**
     * A list of in-cluster groups that the user belongs to.
     *
     * @var list<string>
     */
    public array $groups;
    public function definedProperties(): array
    {
        return ['username' => 'username', 'groups' => 'groups'];
    }
}