<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseUser implements AdditionalPropertiesInterface
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
     * The name of a database user.
     *
     * @var string
     */
    protected $name;
    /**
     * A string representing the database user's role. The value will be either
     * "primary" or "normal".
     * 
     *
     * @var string
     */
    protected $role;
    /**
     * A randomly generated password for the database user.<br>Requires `database:view_credentials` scope.
     *
     * @var string
     */
    protected $password;
    /**
     * Access certificate for TLS client authentication. (Kafka only)
     *
     * @var string
     */
    protected $accessCert;
    /**
     * Access key for TLS client authentication. (Kafka only)
     *
     * @var string
     */
    protected $accessKey;
    /**
     * @var MysqlSettings
     */
    protected $mysqlSettings;
    /**
     * @var UserSettings
     */
    protected $settings;
    /**
     * The name of a database user.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of a database user.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * A string representing the database user's role. The value will be either
     * "primary" or "normal".
     * 
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
    * A string representing the database user's role. The value will be either
    "primary" or "normal".
    
    *
    * @param string $role
    *
    * @return self
    */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * A randomly generated password for the database user.<br>Requires `database:view_credentials` scope.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * A randomly generated password for the database user.<br>Requires `database:view_credentials` scope.
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Access certificate for TLS client authentication. (Kafka only)
     *
     * @return string
     */
    public function getAccessCert(): string
    {
        return $this->accessCert;
    }
    /**
     * Access certificate for TLS client authentication. (Kafka only)
     *
     * @param string $accessCert
     *
     * @return self
     */
    public function setAccessCert(string $accessCert): self
    {
        $this->initialized['accessCert'] = true;
        $this->accessCert = $accessCert;
        return $this;
    }
    /**
     * Access key for TLS client authentication. (Kafka only)
     *
     * @return string
     */
    public function getAccessKey(): string
    {
        return $this->accessKey;
    }
    /**
     * Access key for TLS client authentication. (Kafka only)
     *
     * @param string $accessKey
     *
     * @return self
     */
    public function setAccessKey(string $accessKey): self
    {
        $this->initialized['accessKey'] = true;
        $this->accessKey = $accessKey;
        return $this;
    }
    /**
     * @return MysqlSettings
     */
    public function getMysqlSettings(): MysqlSettings
    {
        return $this->mysqlSettings;
    }
    /**
     * @param MysqlSettings $mysqlSettings
     *
     * @return self
     */
    public function setMysqlSettings(MysqlSettings $mysqlSettings): self
    {
        $this->initialized['mysqlSettings'] = true;
        $this->mysqlSettings = $mysqlSettings;
        return $this;
    }
    /**
     * @return UserSettings
     */
    public function getSettings(): UserSettings
    {
        return $this->settings;
    }
    /**
     * @param UserSettings $settings
     *
     * @return self
     */
    public function setSettings(UserSettings $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['name' => ['name', 'getName', 'setName'], 'role' => ['role', 'getRole', 'setRole'], 'password' => ['password', 'getPassword', 'setPassword'], 'accessCert' => ['access_cert', 'getAccessCert', 'setAccessCert'], 'accessKey' => ['access_key', 'getAccessKey', 'setAccessKey'], 'mysqlSettings' => ['mysql_settings', 'getMysqlSettings', 'setMysqlSettings'], 'settings' => ['settings', 'getSettings', 'setSettings']];
    }
}