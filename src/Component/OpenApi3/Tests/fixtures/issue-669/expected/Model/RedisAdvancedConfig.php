<?php

namespace Jane\Generated\DigitalOcean\Model;

class RedisAdvancedConfig extends \ArrayObject
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
     * A string specifying the desired eviction policy for the Caching cluster.
     * 
     * - `noeviction`: Don't evict any data, returns error when memory limit is reached.
     * - `allkeys-lru:` Evict any key, least recently used (LRU) first.
     * - `allkeys-random`: Evict keys in a random order.
     * - `volatile-lru`: Evict keys with expiration only, least recently used (LRU) first.
     * - `volatile-random`: Evict keys with expiration only in a random order.
     * - `volatile-ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
     *
     * @var string
     */
    protected $redisMaxmemoryPolicy;
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @var int
     */
    protected $redisPubsubClientOutputBufferLimit;
    /**
     * Set number of redis databases. Changing this will cause a restart of redis service.
     *
     * @var int
     */
    protected $redisNumberOfDatabases;
    /**
     * Caching IO thread count
     *
     * @var int
     */
    protected $redisIoThreads;
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @var int
     */
    protected $redisLfuLogFactor = 10;
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @var int
     */
    protected $redisLfuDecayTime = 1;
    /**
     * Require SSL to access Caching.
     * - When enabled, Caching accepts only SSL connections on port `25061`.
     * - When disabled, port `25060` is opened for non-SSL connections, while port `25061` remains available for SSL connections.
     * 
     *
     * @var bool
     */
    protected $redisSsl = true;
    /**
     * Caching idle connection timeout in seconds
     *
     * @var int
     */
    protected $redisTimeout = 300;
    /**
     * Set notify-keyspace-events option. Requires at least `K` or `E` and accepts any combination of the following options. Setting the parameter to `""` disables notifications.
     * - `K` &mdash; Keyspace events
     * - `E` &mdash; Keyevent events
     * - `g` &mdash; Generic commands (e.g. `DEL`, `EXPIRE`, `RENAME`, ...)
     * - `$` &mdash; String commands
     * - `l` &mdash; List commands
     * - `s` &mdash; Set commands
     * - `h` &mdash; Hash commands
     * - `z` &mdash; Sorted set commands
     * - `t` &mdash; Stream commands
     * - `d` &mdash; Module key type events
     * - `x` &mdash; Expired events
     * - `e` &mdash; Evicted events
     * - `m` &mdash; Key miss events
     * - `n` &mdash; New key events
     * - `A` &mdash; Alias for `"g$lshztxed"`
     *
     * @var string
     */
    protected $redisNotifyKeyspaceEvents = '';
    /**
     * Creates an RDB dump of the database every 10 minutes that can be used  to recover data after a node crash. The database does not create the  dump if no keys have changed since the last dump. When set to `off`,  the database cannot fork services, and data can be lost if a service  is restarted or powered off. DigitalOcean Managed Caching databases  do not support the Append Only File (AOF) persistence method.
     *
     * @var string
     */
    protected $redisPersistence;
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Caching configuration acl-pubsub-default.
     *
     * @var string
     */
    protected $redisAclChannelsDefault;
    /**
     * A string specifying the desired eviction policy for the Caching cluster.
     * 
     * - `noeviction`: Don't evict any data, returns error when memory limit is reached.
     * - `allkeys-lru:` Evict any key, least recently used (LRU) first.
     * - `allkeys-random`: Evict keys in a random order.
     * - `volatile-lru`: Evict keys with expiration only, least recently used (LRU) first.
     * - `volatile-random`: Evict keys with expiration only in a random order.
     * - `volatile-ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
     *
     * @return string
     */
    public function getRedisMaxmemoryPolicy(): string
    {
        return $this->redisMaxmemoryPolicy;
    }
    /**
    * A string specifying the desired eviction policy for the Caching cluster.
    
    - `noeviction`: Don't evict any data, returns error when memory limit is reached.
    - `allkeys-lru:` Evict any key, least recently used (LRU) first.
    - `allkeys-random`: Evict keys in a random order.
    - `volatile-lru`: Evict keys with expiration only, least recently used (LRU) first.
    - `volatile-random`: Evict keys with expiration only in a random order.
    - `volatile-ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
    *
    * @param string $redisMaxmemoryPolicy
    *
    * @return self
    */
    public function setRedisMaxmemoryPolicy(string $redisMaxmemoryPolicy): self
    {
        $this->initialized['redisMaxmemoryPolicy'] = true;
        $this->redisMaxmemoryPolicy = $redisMaxmemoryPolicy;
        return $this;
    }
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @return int
     */
    public function getRedisPubsubClientOutputBufferLimit(): int
    {
        return $this->redisPubsubClientOutputBufferLimit;
    }
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @param int $redisPubsubClientOutputBufferLimit
     *
     * @return self
     */
    public function setRedisPubsubClientOutputBufferLimit(int $redisPubsubClientOutputBufferLimit): self
    {
        $this->initialized['redisPubsubClientOutputBufferLimit'] = true;
        $this->redisPubsubClientOutputBufferLimit = $redisPubsubClientOutputBufferLimit;
        return $this;
    }
    /**
     * Set number of redis databases. Changing this will cause a restart of redis service.
     *
     * @return int
     */
    public function getRedisNumberOfDatabases(): int
    {
        return $this->redisNumberOfDatabases;
    }
    /**
     * Set number of redis databases. Changing this will cause a restart of redis service.
     *
     * @param int $redisNumberOfDatabases
     *
     * @return self
     */
    public function setRedisNumberOfDatabases(int $redisNumberOfDatabases): self
    {
        $this->initialized['redisNumberOfDatabases'] = true;
        $this->redisNumberOfDatabases = $redisNumberOfDatabases;
        return $this;
    }
    /**
     * Caching IO thread count
     *
     * @return int
     */
    public function getRedisIoThreads(): int
    {
        return $this->redisIoThreads;
    }
    /**
     * Caching IO thread count
     *
     * @param int $redisIoThreads
     *
     * @return self
     */
    public function setRedisIoThreads(int $redisIoThreads): self
    {
        $this->initialized['redisIoThreads'] = true;
        $this->redisIoThreads = $redisIoThreads;
        return $this;
    }
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @return int
     */
    public function getRedisLfuLogFactor(): int
    {
        return $this->redisLfuLogFactor;
    }
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @param int $redisLfuLogFactor
     *
     * @return self
     */
    public function setRedisLfuLogFactor(int $redisLfuLogFactor): self
    {
        $this->initialized['redisLfuLogFactor'] = true;
        $this->redisLfuLogFactor = $redisLfuLogFactor;
        return $this;
    }
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @return int
     */
    public function getRedisLfuDecayTime(): int
    {
        return $this->redisLfuDecayTime;
    }
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @param int $redisLfuDecayTime
     *
     * @return self
     */
    public function setRedisLfuDecayTime(int $redisLfuDecayTime): self
    {
        $this->initialized['redisLfuDecayTime'] = true;
        $this->redisLfuDecayTime = $redisLfuDecayTime;
        return $this;
    }
    /**
     * Require SSL to access Caching.
     * - When enabled, Caching accepts only SSL connections on port `25061`.
     * - When disabled, port `25060` is opened for non-SSL connections, while port `25061` remains available for SSL connections.
     * 
     *
     * @return bool
     */
    public function getRedisSsl(): bool
    {
        return $this->redisSsl;
    }
    /**
    * Require SSL to access Caching.
    - When enabled, Caching accepts only SSL connections on port `25061`.
    - When disabled, port `25060` is opened for non-SSL connections, while port `25061` remains available for SSL connections.
    
    *
    * @param bool $redisSsl
    *
    * @return self
    */
    public function setRedisSsl(bool $redisSsl): self
    {
        $this->initialized['redisSsl'] = true;
        $this->redisSsl = $redisSsl;
        return $this;
    }
    /**
     * Caching idle connection timeout in seconds
     *
     * @return int
     */
    public function getRedisTimeout(): int
    {
        return $this->redisTimeout;
    }
    /**
     * Caching idle connection timeout in seconds
     *
     * @param int $redisTimeout
     *
     * @return self
     */
    public function setRedisTimeout(int $redisTimeout): self
    {
        $this->initialized['redisTimeout'] = true;
        $this->redisTimeout = $redisTimeout;
        return $this;
    }
    /**
     * Set notify-keyspace-events option. Requires at least `K` or `E` and accepts any combination of the following options. Setting the parameter to `""` disables notifications.
     * - `K` &mdash; Keyspace events
     * - `E` &mdash; Keyevent events
     * - `g` &mdash; Generic commands (e.g. `DEL`, `EXPIRE`, `RENAME`, ...)
     * - `$` &mdash; String commands
     * - `l` &mdash; List commands
     * - `s` &mdash; Set commands
     * - `h` &mdash; Hash commands
     * - `z` &mdash; Sorted set commands
     * - `t` &mdash; Stream commands
     * - `d` &mdash; Module key type events
     * - `x` &mdash; Expired events
     * - `e` &mdash; Evicted events
     * - `m` &mdash; Key miss events
     * - `n` &mdash; New key events
     * - `A` &mdash; Alias for `"g$lshztxed"`
     *
     * @return string
     */
    public function getRedisNotifyKeyspaceEvents(): string
    {
        return $this->redisNotifyKeyspaceEvents;
    }
    /**
    * Set notify-keyspace-events option. Requires at least `K` or `E` and accepts any combination of the following options. Setting the parameter to `""` disables notifications.
    - `K` &mdash; Keyspace events
    - `E` &mdash; Keyevent events
    - `g` &mdash; Generic commands (e.g. `DEL`, `EXPIRE`, `RENAME`, ...)
    - `$` &mdash; String commands
    - `l` &mdash; List commands
    - `s` &mdash; Set commands
    - `h` &mdash; Hash commands
    - `z` &mdash; Sorted set commands
    - `t` &mdash; Stream commands
    - `d` &mdash; Module key type events
    - `x` &mdash; Expired events
    - `e` &mdash; Evicted events
    - `m` &mdash; Key miss events
    - `n` &mdash; New key events
    - `A` &mdash; Alias for `"g$lshztxed"`
    *
    * @param string $redisNotifyKeyspaceEvents
    *
    * @return self
    */
    public function setRedisNotifyKeyspaceEvents(string $redisNotifyKeyspaceEvents): self
    {
        $this->initialized['redisNotifyKeyspaceEvents'] = true;
        $this->redisNotifyKeyspaceEvents = $redisNotifyKeyspaceEvents;
        return $this;
    }
    /**
     * Creates an RDB dump of the database every 10 minutes that can be used  to recover data after a node crash. The database does not create the  dump if no keys have changed since the last dump. When set to `off`,  the database cannot fork services, and data can be lost if a service  is restarted or powered off. DigitalOcean Managed Caching databases  do not support the Append Only File (AOF) persistence method.
     *
     * @return string
     */
    public function getRedisPersistence(): string
    {
        return $this->redisPersistence;
    }
    /**
     * Creates an RDB dump of the database every 10 minutes that can be used  to recover data after a node crash. The database does not create the  dump if no keys have changed since the last dump. When set to `off`,  the database cannot fork services, and data can be lost if a service  is restarted or powered off. DigitalOcean Managed Caching databases  do not support the Append Only File (AOF) persistence method.
     *
     * @param string $redisPersistence
     *
     * @return self
     */
    public function setRedisPersistence(string $redisPersistence): self
    {
        $this->initialized['redisPersistence'] = true;
        $this->redisPersistence = $redisPersistence;
        return $this;
    }
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Caching configuration acl-pubsub-default.
     *
     * @return string
     */
    public function getRedisAclChannelsDefault(): string
    {
        return $this->redisAclChannelsDefault;
    }
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Caching configuration acl-pubsub-default.
     *
     * @param string $redisAclChannelsDefault
     *
     * @return self
     */
    public function setRedisAclChannelsDefault(string $redisAclChannelsDefault): self
    {
        $this->initialized['redisAclChannelsDefault'] = true;
        $this->redisAclChannelsDefault = $redisAclChannelsDefault;
        return $this;
    }
}