<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppLogDestinationOpenSearchSpecBasicAuth implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Username to authenticate with. Only required when `endpoint` is set.
     * Defaults to `doadmin` when `cluster_name` is set.
     *
     * @var string
     */
    public string $user;
    /**
     * Password for user defined in User. Is required when `endpoint` is set.
     * Cannot be set if using a DigitalOcean DBaaS OpenSearch cluster.
     *
     * @var string
     */
    public string $password;
    public function definedProperties(): array
    {
        return ['user' => 'user', 'password' => 'password'];
    }
}