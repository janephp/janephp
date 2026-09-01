<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class PgbouncerAdvancedConfig implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * Run server_reset_query (DISCARD ALL) in all pooling modes.
     *
     * @var bool
     */
    public bool $serverResetQueryAlways;
    /**
     * List of parameters to ignore when given in startup packet.
     *
     * @var list<string>
     */
    public array $ignoreStartupParameters;
    /**
     * If current server connections are below this number, adds more. Improves behavior when usual load comes suddenly back after period of total inactivity. The value is effectively capped at the pool size.
     *
     * @var int
     */
    public int $minPoolSize;
    /**
     * The pooler closes any unused server connection that has been connected longer than this amount of seconds.
     *
     * @var int
     */
    public int $serverLifetime;
    /**
     * Drops server connections if they have been idle more than this many seconds.  If 0, timeout is disabled.
     *
     * @var int
     */
    public int $serverIdleTimeout;
    /**
     * If non-zero, automatically creates a pool of that size per user when a pool doesn't exist.
     *
     * @var int
     */
    public int $autodbPoolSize;
    /**
     * PGBouncer pool mode
     *
     * @var string
     */
    public string $autodbPoolMode;
    /**
     * Only allows a maximum this many server connections per database (regardless of user). If 0, allows unlimited connections.
     *
     * @var int
     */
    public int $autodbMaxDbConnections;
    /**
     * If the automatically-created database pools have been unused this many seconds, they are freed. If 0, timeout is disabled.
     *
     * @var int
     */
    public int $autodbIdleTimeout;
    public function definedProperties(): array
    {
        return ['serverResetQueryAlways' => 'server_reset_query_always', 'ignoreStartupParameters' => 'ignore_startup_parameters', 'minPoolSize' => 'min_pool_size', 'serverLifetime' => 'server_lifetime', 'serverIdleTimeout' => 'server_idle_timeout', 'autodbPoolSize' => 'autodb_pool_size', 'autodbPoolMode' => 'autodb_pool_mode', 'autodbMaxDbConnections' => 'autodb_max_db_connections', 'autodbIdleTimeout' => 'autodb_idle_timeout'];
    }
}