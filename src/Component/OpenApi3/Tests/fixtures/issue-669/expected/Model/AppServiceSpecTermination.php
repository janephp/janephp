<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppServiceSpecTermination implements AdditionalPropertiesInterface
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
     * The number of seconds to wait between selecting a container instance for termination and issuing the TERM signal. Selecting a container instance for termination begins an asynchronous drain of new requests on upstream load-balancers. (Default 15)
     *
     * @var int
     */
    protected $drainSeconds;
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @var int
     */
    protected $gracePeriodSeconds;
    /**
     * The number of seconds to wait between selecting a container instance for termination and issuing the TERM signal. Selecting a container instance for termination begins an asynchronous drain of new requests on upstream load-balancers. (Default 15)
     *
     * @return int
     */
    public function getDrainSeconds(): int
    {
        return $this->drainSeconds;
    }
    /**
     * The number of seconds to wait between selecting a container instance for termination and issuing the TERM signal. Selecting a container instance for termination begins an asynchronous drain of new requests on upstream load-balancers. (Default 15)
     *
     * @param int $drainSeconds
     *
     * @return self
     */
    public function setDrainSeconds(int $drainSeconds): self
    {
        $this->initialized['drainSeconds'] = true;
        $this->drainSeconds = $drainSeconds;
        return $this;
    }
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @return int
     */
    public function getGracePeriodSeconds(): int
    {
        return $this->gracePeriodSeconds;
    }
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @param int $gracePeriodSeconds
     *
     * @return self
     */
    public function setGracePeriodSeconds(int $gracePeriodSeconds): self
    {
        $this->initialized['gracePeriodSeconds'] = true;
        $this->gracePeriodSeconds = $gracePeriodSeconds;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['drainSeconds' => ['drain_seconds', 'getDrainSeconds', 'setDrainSeconds'], 'gracePeriodSeconds' => ['grace_period_seconds', 'getGracePeriodSeconds', 'setGracePeriodSeconds']];
    }
}