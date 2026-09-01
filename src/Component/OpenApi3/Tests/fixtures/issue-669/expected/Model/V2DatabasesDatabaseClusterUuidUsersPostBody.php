<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidUsersPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The name of a database user.
     *
     * @var string
     */
    public string $name;
    /**
     * A string representing the database user's role. The value will be either
     * "primary" or "normal".
     * 
     *
     * @var string
     */
    public string $role;
    /**
     * A randomly generated password for the database user.<br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    public string $password;
    /**
     * Access certificate for TLS client authentication. (Kafka only)
     *
     * @var string
     */
    public string $accessCert;
    /**
     * Access key for TLS client authentication. (Kafka only)
     *
     * @var string
     */
    public string $accessKey;
    /**
     * @var MysqlSettings
     */
    public MysqlSettings $mysqlSettings;
    /**
     * @var UserSettings
     */
    public UserSettings $settings;
    /**
     * (To be deprecated: use settings.mongo_user_settings.role instead for access controls to MongoDB databases).
     * For MongoDB clusters, set to `true` to create a read-only user.
     * This option is not currently supported for other database engines.
     * 
     *
     * @var bool
     */
    public bool $readonly;
    public function definedProperties(): array
    {
        return ['name' => 'name', 'role' => 'role', 'password' => 'password', 'accessCert' => 'access_cert', 'accessKey' => 'access_key', 'mysqlSettings' => 'mysql_settings', 'settings' => 'settings', 'readonly' => 'readonly'];
    }
}