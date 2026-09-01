<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class V2DatabasesDatabaseClusterUuidUsersUsernameResetAuthPostBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var MysqlSettings
     */
    public MysqlSettings $mysqlSettings;
    public function definedProperties(): array
    {
        return ['mysqlSettings' => 'mysql_settings'];
    }
}