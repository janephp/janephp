<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody implements AdditionalPropertiesInterface
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
     * @var MysqlSettings
     */
    protected $mysqlSettings;
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
    public function definedProperties(): array
    {
        return ['mysqlSettings' => ['mysql_settings', 'getMysqlSettings', 'setMysqlSettings']];
    }
}