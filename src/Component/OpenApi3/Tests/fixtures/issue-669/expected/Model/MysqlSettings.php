<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class MysqlSettings implements AdditionalPropertiesInterface
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
     * A string specifying the authentication method to be used for connections
     * to the MySQL user account. The valid values are `mysql_native_password`
     * or `caching_sha2_password`. If excluded when creating a new user, the
     * default for the version of MySQL in use will be used. As of MySQL 8.0, the
     * default is `caching_sha2_password`.
     * 
     *
     * @var string
     */
    protected $authPlugin;
    /**
     * A string specifying the authentication method to be used for connections
     * to the MySQL user account. The valid values are `mysql_native_password`
     * or `caching_sha2_password`. If excluded when creating a new user, the
     * default for the version of MySQL in use will be used. As of MySQL 8.0, the
     * default is `caching_sha2_password`.
     * 
     *
     * @return string
     */
    public function getAuthPlugin(): string
    {
        return $this->authPlugin;
    }
    /**
    * A string specifying the authentication method to be used for connections
    to the MySQL user account. The valid values are `mysql_native_password`
    or `caching_sha2_password`. If excluded when creating a new user, the
    default for the version of MySQL in use will be used. As of MySQL 8.0, the
    default is `caching_sha2_password`.
    
    *
    * @param string $authPlugin
    *
    * @return self
    */
    public function setAuthPlugin(string $authPlugin): self
    {
        $this->initialized['authPlugin'] = true;
        $this->authPlugin = $authPlugin;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['authPlugin' => ['auth_plugin', 'getAuthPlugin', 'setAuthPlugin']];
    }
}