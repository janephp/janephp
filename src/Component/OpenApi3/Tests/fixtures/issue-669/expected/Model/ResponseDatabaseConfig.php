<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseDatabaseConfig implements AdditionalPropertiesInterface
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
     * @var MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig|MongoAdvancedConfig
     */
    protected $config;
    /**
     * @return MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig|MongoAdvancedConfig
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig|MongoAdvancedConfig $config
     *
     * @return self
     */
    public function setConfig($config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['config' => ['config', 'getConfig', 'setConfig']];
    }
}