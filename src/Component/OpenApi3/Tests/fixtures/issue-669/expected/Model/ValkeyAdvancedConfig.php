<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ValkeyAdvancedConfig implements AdditionalPropertiesInterface
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
     * A string specifying the desired eviction policy for a Caching or Valkey cluster.
     * 
     * - `noeviction`: Don't evict any data, returns error when memory limit is reached.
     * - `allkeys_lru:` Evict any key, least recently used (LRU) first.
     * - `allkeys_random`: Evict keys in a random order.
     * - `volatile_lru`: Evict keys with expiration only, least recently used (LRU) first.
     * - `volatile_random`: Evict keys with expiration only in a random order.
     * - `volatile_ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
     *
     * @var string
     */
    protected $valkeyMaxmemoryPolicy;
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @var int
     */
    protected $valkeyPubsubClientOutputBufferLimit;
    /**
     * Set number of valkey databases. Changing this will cause a restart of valkey service.
     *
     * @var int
     */
    protected $valkeyNumberOfDatabases;
    /**
     * Valkey IO thread count
     *
     * @var int
     */
    protected $valkeyIoThreads;
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @var int
     */
    protected $valkeyLfuLogFactor = 10;
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @var int
     */
    protected $valkeyLfuDecayTime = 1;
    /**
     * Require SSL to access Valkey
     *
     * @var bool
     */
    protected $valkeySsl = true;
    /**
     * Valkey idle connection timeout in seconds
     *
     * @var int
     */
    protected $valkeyTimeout = 300;
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
    protected $valkeyNotifyKeyspaceEvents = '';
    /**
     * When persistence is 'rdb', Valkey does RDB dumps each 10 minutes if any key is changed. Also RDB dumps are done according to backup schedule for backup purposes. When persistence is 'off', no RDB dumps and backups are done, so data can be lost at any moment if service is restarted for any reason, or if service is powered off. Also service can't be forked.
     *
     * @var string
     */
    protected $valkeyPersistence;
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Valkey configuration acl-pubsub-default.
     *
     * @var string
     */
    protected $valkeyAclChannelsDefault;
    /**
     * Frequent RDB snapshots
     * When enabled, Valkey will create frequent local RDB snapshots. When disabled, Valkey will only take RDB snapshots when a backup is created, based on the backup schedule. This setting is ignored when valkey_persistence is set to off.
     * 
     *
     * @var bool
     */
    protected $frequentSnapshots = true;
    /**
     * Active expire effort
     * Valkey reclaims expired keys both when accessed and in the background. The background process scans for expired keys to free memory. Increasing the active-expire-effort setting (default 1, max 10) uses more CPU to reclaim expired keys faster, reducing memory usage but potentially increasing latency.
     * 
     *
     * @var int
     */
    protected $valkeyActiveExpireEffort = 1;
    /**
     * A string specifying the desired eviction policy for a Caching or Valkey cluster.
     * 
     * - `noeviction`: Don't evict any data, returns error when memory limit is reached.
     * - `allkeys_lru:` Evict any key, least recently used (LRU) first.
     * - `allkeys_random`: Evict keys in a random order.
     * - `volatile_lru`: Evict keys with expiration only, least recently used (LRU) first.
     * - `volatile_random`: Evict keys with expiration only in a random order.
     * - `volatile_ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
     *
     * @return string
     */
    public function getValkeyMaxmemoryPolicy(): string
    {
        return $this->valkeyMaxmemoryPolicy;
    }
    /**
    * A string specifying the desired eviction policy for a Caching or Valkey cluster.
    
    - `noeviction`: Don't evict any data, returns error when memory limit is reached.
    - `allkeys_lru:` Evict any key, least recently used (LRU) first.
    - `allkeys_random`: Evict keys in a random order.
    - `volatile_lru`: Evict keys with expiration only, least recently used (LRU) first.
    - `volatile_random`: Evict keys with expiration only in a random order.
    - `volatile_ttl`: Evict keys with expiration only, shortest time-to-live (TTL) first.
    *
    * @param string $valkeyMaxmemoryPolicy
    *
    * @return self
    */
    public function setValkeyMaxmemoryPolicy(string $valkeyMaxmemoryPolicy): self
    {
        $this->initialized['valkeyMaxmemoryPolicy'] = true;
        $this->valkeyMaxmemoryPolicy = $valkeyMaxmemoryPolicy;
        return $this;
    }
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @return int
     */
    public function getValkeyPubsubClientOutputBufferLimit(): int
    {
        return $this->valkeyPubsubClientOutputBufferLimit;
    }
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @param int $valkeyPubsubClientOutputBufferLimit
     *
     * @return self
     */
    public function setValkeyPubsubClientOutputBufferLimit(int $valkeyPubsubClientOutputBufferLimit): self
    {
        $this->initialized['valkeyPubsubClientOutputBufferLimit'] = true;
        $this->valkeyPubsubClientOutputBufferLimit = $valkeyPubsubClientOutputBufferLimit;
        return $this;
    }
    /**
     * Set number of valkey databases. Changing this will cause a restart of valkey service.
     *
     * @return int
     */
    public function getValkeyNumberOfDatabases(): int
    {
        return $this->valkeyNumberOfDatabases;
    }
    /**
     * Set number of valkey databases. Changing this will cause a restart of valkey service.
     *
     * @param int $valkeyNumberOfDatabases
     *
     * @return self
     */
    public function setValkeyNumberOfDatabases(int $valkeyNumberOfDatabases): self
    {
        $this->initialized['valkeyNumberOfDatabases'] = true;
        $this->valkeyNumberOfDatabases = $valkeyNumberOfDatabases;
        return $this;
    }
    /**
     * Valkey IO thread count
     *
     * @return int
     */
    public function getValkeyIoThreads(): int
    {
        return $this->valkeyIoThreads;
    }
    /**
     * Valkey IO thread count
     *
     * @param int $valkeyIoThreads
     *
     * @return self
     */
    public function setValkeyIoThreads(int $valkeyIoThreads): self
    {
        $this->initialized['valkeyIoThreads'] = true;
        $this->valkeyIoThreads = $valkeyIoThreads;
        return $this;
    }
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @return int
     */
    public function getValkeyLfuLogFactor(): int
    {
        return $this->valkeyLfuLogFactor;
    }
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @param int $valkeyLfuLogFactor
     *
     * @return self
     */
    public function setValkeyLfuLogFactor(int $valkeyLfuLogFactor): self
    {
        $this->initialized['valkeyLfuLogFactor'] = true;
        $this->valkeyLfuLogFactor = $valkeyLfuLogFactor;
        return $this;
    }
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @return int
     */
    public function getValkeyLfuDecayTime(): int
    {
        return $this->valkeyLfuDecayTime;
    }
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @param int $valkeyLfuDecayTime
     *
     * @return self
     */
    public function setValkeyLfuDecayTime(int $valkeyLfuDecayTime): self
    {
        $this->initialized['valkeyLfuDecayTime'] = true;
        $this->valkeyLfuDecayTime = $valkeyLfuDecayTime;
        return $this;
    }
    /**
     * Require SSL to access Valkey
     *
     * @return bool
     */
    public function getValkeySsl(): bool
    {
        return $this->valkeySsl;
    }
    /**
     * Require SSL to access Valkey
     *
     * @param bool $valkeySsl
     *
     * @return self
     */
    public function setValkeySsl(bool $valkeySsl): self
    {
        $this->initialized['valkeySsl'] = true;
        $this->valkeySsl = $valkeySsl;
        return $this;
    }
    /**
     * Valkey idle connection timeout in seconds
     *
     * @return int
     */
    public function getValkeyTimeout(): int
    {
        return $this->valkeyTimeout;
    }
    /**
     * Valkey idle connection timeout in seconds
     *
     * @param int $valkeyTimeout
     *
     * @return self
     */
    public function setValkeyTimeout(int $valkeyTimeout): self
    {
        $this->initialized['valkeyTimeout'] = true;
        $this->valkeyTimeout = $valkeyTimeout;
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
    public function getValkeyNotifyKeyspaceEvents(): string
    {
        return $this->valkeyNotifyKeyspaceEvents;
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
    * @param string $valkeyNotifyKeyspaceEvents
    *
    * @return self
    */
    public function setValkeyNotifyKeyspaceEvents(string $valkeyNotifyKeyspaceEvents): self
    {
        $this->initialized['valkeyNotifyKeyspaceEvents'] = true;
        $this->valkeyNotifyKeyspaceEvents = $valkeyNotifyKeyspaceEvents;
        return $this;
    }
    /**
     * When persistence is 'rdb', Valkey does RDB dumps each 10 minutes if any key is changed. Also RDB dumps are done according to backup schedule for backup purposes. When persistence is 'off', no RDB dumps and backups are done, so data can be lost at any moment if service is restarted for any reason, or if service is powered off. Also service can't be forked.
     *
     * @return string
     */
    public function getValkeyPersistence(): string
    {
        return $this->valkeyPersistence;
    }
    /**
     * When persistence is 'rdb', Valkey does RDB dumps each 10 minutes if any key is changed. Also RDB dumps are done according to backup schedule for backup purposes. When persistence is 'off', no RDB dumps and backups are done, so data can be lost at any moment if service is restarted for any reason, or if service is powered off. Also service can't be forked.
     *
     * @param string $valkeyPersistence
     *
     * @return self
     */
    public function setValkeyPersistence(string $valkeyPersistence): self
    {
        $this->initialized['valkeyPersistence'] = true;
        $this->valkeyPersistence = $valkeyPersistence;
        return $this;
    }
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Valkey configuration acl-pubsub-default.
     *
     * @return string
     */
    public function getValkeyAclChannelsDefault(): string
    {
        return $this->valkeyAclChannelsDefault;
    }
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Valkey configuration acl-pubsub-default.
     *
     * @param string $valkeyAclChannelsDefault
     *
     * @return self
     */
    public function setValkeyAclChannelsDefault(string $valkeyAclChannelsDefault): self
    {
        $this->initialized['valkeyAclChannelsDefault'] = true;
        $this->valkeyAclChannelsDefault = $valkeyAclChannelsDefault;
        return $this;
    }
    /**
     * Frequent RDB snapshots
     * When enabled, Valkey will create frequent local RDB snapshots. When disabled, Valkey will only take RDB snapshots when a backup is created, based on the backup schedule. This setting is ignored when valkey_persistence is set to off.
     * 
     *
     * @return bool
     */
    public function getFrequentSnapshots(): bool
    {
        return $this->frequentSnapshots;
    }
    /**
    * Frequent RDB snapshots
    When enabled, Valkey will create frequent local RDB snapshots. When disabled, Valkey will only take RDB snapshots when a backup is created, based on the backup schedule. This setting is ignored when valkey_persistence is set to off.
    
    *
    * @param bool $frequentSnapshots
    *
    * @return self
    */
    public function setFrequentSnapshots(bool $frequentSnapshots): self
    {
        $this->initialized['frequentSnapshots'] = true;
        $this->frequentSnapshots = $frequentSnapshots;
        return $this;
    }
    /**
     * Active expire effort
     * Valkey reclaims expired keys both when accessed and in the background. The background process scans for expired keys to free memory. Increasing the active-expire-effort setting (default 1, max 10) uses more CPU to reclaim expired keys faster, reducing memory usage but potentially increasing latency.
     * 
     *
     * @return int
     */
    public function getValkeyActiveExpireEffort(): int
    {
        return $this->valkeyActiveExpireEffort;
    }
    /**
    * Active expire effort
    Valkey reclaims expired keys both when accessed and in the background. The background process scans for expired keys to free memory. Increasing the active-expire-effort setting (default 1, max 10) uses more CPU to reclaim expired keys faster, reducing memory usage but potentially increasing latency.
    
    *
    * @param int $valkeyActiveExpireEffort
    *
    * @return self
    */
    public function setValkeyActiveExpireEffort(int $valkeyActiveExpireEffort): self
    {
        $this->initialized['valkeyActiveExpireEffort'] = true;
        $this->valkeyActiveExpireEffort = $valkeyActiveExpireEffort;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['valkeyMaxmemoryPolicy' => ['valkey_maxmemory_policy', 'getValkeyMaxmemoryPolicy', 'setValkeyMaxmemoryPolicy'], 'valkeyPubsubClientOutputBufferLimit' => ['valkey_pubsub_client_output_buffer_limit', 'getValkeyPubsubClientOutputBufferLimit', 'setValkeyPubsubClientOutputBufferLimit'], 'valkeyNumberOfDatabases' => ['valkey_number_of_databases', 'getValkeyNumberOfDatabases', 'setValkeyNumberOfDatabases'], 'valkeyIoThreads' => ['valkey_io_threads', 'getValkeyIoThreads', 'setValkeyIoThreads'], 'valkeyLfuLogFactor' => ['valkey_lfu_log_factor', 'getValkeyLfuLogFactor', 'setValkeyLfuLogFactor'], 'valkeyLfuDecayTime' => ['valkey_lfu_decay_time', 'getValkeyLfuDecayTime', 'setValkeyLfuDecayTime'], 'valkeySsl' => ['valkey_ssl', 'getValkeySsl', 'setValkeySsl'], 'valkeyTimeout' => ['valkey_timeout', 'getValkeyTimeout', 'setValkeyTimeout'], 'valkeyNotifyKeyspaceEvents' => ['valkey_notify_keyspace_events', 'getValkeyNotifyKeyspaceEvents', 'setValkeyNotifyKeyspaceEvents'], 'valkeyPersistence' => ['valkey_persistence', 'getValkeyPersistence', 'setValkeyPersistence'], 'valkeyAclChannelsDefault' => ['valkey_acl_channels_default', 'getValkeyAclChannelsDefault', 'setValkeyAclChannelsDefault'], 'frequentSnapshots' => ['frequent_snapshots', 'getFrequentSnapshots', 'setFrequentSnapshots'], 'valkeyActiveExpireEffort' => ['valkey_active_expire_effort', 'getValkeyActiveExpireEffort', 'setValkeyActiveExpireEffort']];
    }
}