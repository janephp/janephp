<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class DatabaseConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|MongoAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig
     */
    public $config;
    public function definedProperties(): array
    {
        return ['config' => 'config'];
    }
}