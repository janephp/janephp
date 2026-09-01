<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ValkeyAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public string $valkeyMaxmemoryPolicy;
    /**
     * Set output buffer limit for pub / sub clients in MB. The value is the hard limit, the soft limit is 1/4 of the hard limit. When setting the limit, be mindful of the available memory in the selected service plan.
     *
     * @var int
     */
    public int $valkeyPubsubClientOutputBufferLimit;
    /**
     * Set number of valkey databases. Changing this will cause a restart of valkey service.
     *
     * @var int
     */
    public int $valkeyNumberOfDatabases;
    /**
     * Valkey IO thread count
     *
     * @var int
     */
    public int $valkeyIoThreads;
    /**
     * Counter logarithm factor for volatile-lfu and allkeys-lfu maxmemory-policies
     *
     * @var int
     */
    public int $valkeyLfuLogFactor = 10;
    /**
     * LFU maxmemory-policy counter decay time in minutes
     *
     * @var int
     */
    public int $valkeyLfuDecayTime = 1;
    /**
     * Require SSL to access Valkey
     *
     * @var bool
     */
    public bool $valkeySsl = true;
    /**
     * Valkey idle connection timeout in seconds
     *
     * @var int
     */
    public int $valkeyTimeout = 300;
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
    public string $valkeyNotifyKeyspaceEvents = '';
    /**
     * When persistence is 'rdb', Valkey does RDB dumps each 10 minutes if any key is changed. Also RDB dumps are done according to backup schedule for backup purposes. When persistence is 'off', no RDB dumps and backups are done, so data can be lost at any moment if service is restarted for any reason, or if service is powered off. Also service can't be forked.
     *
     * @var string
     */
    public string $valkeyPersistence;
    /**
     * Determines default pub/sub channels' ACL for new users if ACL is not supplied. When this option is not defined, all_channels is assumed to keep backward compatibility. This option doesn't affect Valkey configuration acl-pubsub-default.
     *
     * @var string
     */
    public string $valkeyAclChannelsDefault;
    /**
     * Frequent RDB snapshots
     * When enabled, Valkey will create frequent local RDB snapshots. When disabled, Valkey will only take RDB snapshots when a backup is created, based on the backup schedule. This setting is ignored when valkey_persistence is set to off.
     * 
     *
     * @var bool
     */
    public bool $frequentSnapshots = true;
    /**
     * Active expire effort
     * Valkey reclaims expired keys both when accessed and in the background. The background process scans for expired keys to free memory. Increasing the active-expire-effort setting (default 1, max 10) uses more CPU to reclaim expired keys faster, reducing memory usage but potentially increasing latency.
     * 
     *
     * @var int
     */
    public int $valkeyActiveExpireEffort = 1;
    public function definedProperties(): array
    {
        return ['valkeyMaxmemoryPolicy' => 'valkey_maxmemory_policy', 'valkeyPubsubClientOutputBufferLimit' => 'valkey_pubsub_client_output_buffer_limit', 'valkeyNumberOfDatabases' => 'valkey_number_of_databases', 'valkeyIoThreads' => 'valkey_io_threads', 'valkeyLfuLogFactor' => 'valkey_lfu_log_factor', 'valkeyLfuDecayTime' => 'valkey_lfu_decay_time', 'valkeySsl' => 'valkey_ssl', 'valkeyTimeout' => 'valkey_timeout', 'valkeyNotifyKeyspaceEvents' => 'valkey_notify_keyspace_events', 'valkeyPersistence' => 'valkey_persistence', 'valkeyAclChannelsDefault' => 'valkey_acl_channels_default', 'frequentSnapshots' => 'frequent_snapshots', 'valkeyActiveExpireEffort' => 'valkey_active_expire_effort'];
    }
}