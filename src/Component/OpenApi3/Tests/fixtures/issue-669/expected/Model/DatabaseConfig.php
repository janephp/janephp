<?php

namespace Jane\Generated\DigitalOcean\Model;

class DatabaseConfig extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|MongoAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig
     */
    protected $config;
    /**
     * @return MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|MongoAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig
     */
    public function getConfig()
    {
        return $this->config;
    }
    /**
     * @param MysqlAdvancedConfig|PostgresAdvancedConfig|RedisAdvancedConfig|ValkeyAdvancedConfig|MongoAdvancedConfig|KafkaAdvancedConfig|OpensearchAdvancedConfig $config
     *
     * @return self
     */
    public function setConfig($config): self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
}