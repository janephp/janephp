<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MysqlSettings implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * A string specifying the authentication method to be used for connections
     * to the MySQL user account. The valid values are `mysql_native_password`
     * or `caching_sha2_password`. If excluded when creating a new user, the
     * default for the version of MySQL in use will be used. As of MySQL 8.0, the
     * default is `caching_sha2_password`.
     * 
     *
     * @var string
     */
    public string $authPlugin;
    public function definedProperties(): array
    {
        return ['authPlugin' => 'auth_plugin'];
    }
}