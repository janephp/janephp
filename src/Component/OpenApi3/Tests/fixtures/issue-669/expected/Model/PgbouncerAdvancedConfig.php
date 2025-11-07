<?php

namespace Jane\Generated\DigitalOcean\Model;

class PgbouncerAdvancedConfig extends \ArrayObject
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
     * Run server_reset_query (DISCARD ALL) in all pooling modes.
     *
     * @var bool
     */
    protected $serverResetQueryAlways;
    /**
     * List of parameters to ignore when given in startup packet.
     *
     * @var list<string>
     */
    protected $ignoreStartupParameters;
    /**
     * If current server connections are below this number, adds more. Improves behavior when usual load comes suddenly back after period of total inactivity. The value is effectively capped at the pool size.
     *
     * @var int
     */
    protected $minPoolSize;
    /**
     * The pooler closes any unused server connection that has been connected longer than this amount of seconds.
     *
     * @var int
     */
    protected $serverLifetime;
    /**
     * Drops server connections if they have been idle more than this many seconds.  If 0, timeout is disabled.
     *
     * @var int
     */
    protected $serverIdleTimeout;
    /**
     * If non-zero, automatically creates a pool of that size per user when a pool doesn't exist.
     *
     * @var int
     */
    protected $autodbPoolSize;
    /**
     * PGBouncer pool mode
     *
     * @var string
     */
    protected $autodbPoolMode;
    /**
     * Only allows a maximum this many server connections per database (regardless of user). If 0, allows unlimited connections.
     *
     * @var int
     */
    protected $autodbMaxDbConnections;
    /**
     * If the automatically-created database pools have been unused this many seconds, they are freed. If 0, timeout is disabled.
     *
     * @var int
     */
    protected $autodbIdleTimeout;
    /**
     * Run server_reset_query (DISCARD ALL) in all pooling modes.
     *
     * @return bool
     */
    public function getServerResetQueryAlways(): bool
    {
        return $this->serverResetQueryAlways;
    }
    /**
     * Run server_reset_query (DISCARD ALL) in all pooling modes.
     *
     * @param bool $serverResetQueryAlways
     *
     * @return self
     */
    public function setServerResetQueryAlways(bool $serverResetQueryAlways): self
    {
        $this->initialized['serverResetQueryAlways'] = true;
        $this->serverResetQueryAlways = $serverResetQueryAlways;
        return $this;
    }
    /**
     * List of parameters to ignore when given in startup packet.
     *
     * @return list<string>
     */
    public function getIgnoreStartupParameters(): array
    {
        return $this->ignoreStartupParameters;
    }
    /**
     * List of parameters to ignore when given in startup packet.
     *
     * @param list<string> $ignoreStartupParameters
     *
     * @return self
     */
    public function setIgnoreStartupParameters(array $ignoreStartupParameters): self
    {
        $this->initialized['ignoreStartupParameters'] = true;
        $this->ignoreStartupParameters = $ignoreStartupParameters;
        return $this;
    }
    /**
     * If current server connections are below this number, adds more. Improves behavior when usual load comes suddenly back after period of total inactivity. The value is effectively capped at the pool size.
     *
     * @return int
     */
    public function getMinPoolSize(): int
    {
        return $this->minPoolSize;
    }
    /**
     * If current server connections are below this number, adds more. Improves behavior when usual load comes suddenly back after period of total inactivity. The value is effectively capped at the pool size.
     *
     * @param int $minPoolSize
     *
     * @return self
     */
    public function setMinPoolSize(int $minPoolSize): self
    {
        $this->initialized['minPoolSize'] = true;
        $this->minPoolSize = $minPoolSize;
        return $this;
    }
    /**
     * The pooler closes any unused server connection that has been connected longer than this amount of seconds.
     *
     * @return int
     */
    public function getServerLifetime(): int
    {
        return $this->serverLifetime;
    }
    /**
     * The pooler closes any unused server connection that has been connected longer than this amount of seconds.
     *
     * @param int $serverLifetime
     *
     * @return self
     */
    public function setServerLifetime(int $serverLifetime): self
    {
        $this->initialized['serverLifetime'] = true;
        $this->serverLifetime = $serverLifetime;
        return $this;
    }
    /**
     * Drops server connections if they have been idle more than this many seconds.  If 0, timeout is disabled.
     *
     * @return int
     */
    public function getServerIdleTimeout(): int
    {
        return $this->serverIdleTimeout;
    }
    /**
     * Drops server connections if they have been idle more than this many seconds.  If 0, timeout is disabled. 
     *
     * @param int $serverIdleTimeout
     *
     * @return self
     */
    public function setServerIdleTimeout(int $serverIdleTimeout): self
    {
        $this->initialized['serverIdleTimeout'] = true;
        $this->serverIdleTimeout = $serverIdleTimeout;
        return $this;
    }
    /**
     * If non-zero, automatically creates a pool of that size per user when a pool doesn't exist.
     *
     * @return int
     */
    public function getAutodbPoolSize(): int
    {
        return $this->autodbPoolSize;
    }
    /**
     * If non-zero, automatically creates a pool of that size per user when a pool doesn't exist.
     *
     * @param int $autodbPoolSize
     *
     * @return self
     */
    public function setAutodbPoolSize(int $autodbPoolSize): self
    {
        $this->initialized['autodbPoolSize'] = true;
        $this->autodbPoolSize = $autodbPoolSize;
        return $this;
    }
    /**
     * PGBouncer pool mode
     *
     * @return string
     */
    public function getAutodbPoolMode(): string
    {
        return $this->autodbPoolMode;
    }
    /**
     * PGBouncer pool mode
     *
     * @param string $autodbPoolMode
     *
     * @return self
     */
    public function setAutodbPoolMode(string $autodbPoolMode): self
    {
        $this->initialized['autodbPoolMode'] = true;
        $this->autodbPoolMode = $autodbPoolMode;
        return $this;
    }
    /**
     * Only allows a maximum this many server connections per database (regardless of user). If 0, allows unlimited connections.
     *
     * @return int
     */
    public function getAutodbMaxDbConnections(): int
    {
        return $this->autodbMaxDbConnections;
    }
    /**
     * Only allows a maximum this many server connections per database (regardless of user). If 0, allows unlimited connections.
     *
     * @param int $autodbMaxDbConnections
     *
     * @return self
     */
    public function setAutodbMaxDbConnections(int $autodbMaxDbConnections): self
    {
        $this->initialized['autodbMaxDbConnections'] = true;
        $this->autodbMaxDbConnections = $autodbMaxDbConnections;
        return $this;
    }
    /**
     * If the automatically-created database pools have been unused this many seconds, they are freed. If 0, timeout is disabled.
     *
     * @return int
     */
    public function getAutodbIdleTimeout(): int
    {
        return $this->autodbIdleTimeout;
    }
    /**
     * If the automatically-created database pools have been unused this many seconds, they are freed. If 0, timeout is disabled.
     *
     * @param int $autodbIdleTimeout
     *
     * @return self
     */
    public function setAutodbIdleTimeout(int $autodbIdleTimeout): self
    {
        $this->initialized['autodbIdleTimeout'] = true;
        $this->autodbIdleTimeout = $autodbIdleTimeout;
        return $this;
    }
}