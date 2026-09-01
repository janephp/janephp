<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppServiceSpecTermination implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of seconds to wait between selecting a container instance for termination and issuing the TERM signal. Selecting a container instance for termination begins an asynchronous drain of new requests on upstream load-balancers. (Default 15)
     *
     * @var int
     */
    public int $drainSeconds;
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @var int
     */
    public int $gracePeriodSeconds;
    public function definedProperties(): array
    {
        return ['drainSeconds' => 'drain_seconds', 'gracePeriodSeconds' => 'grace_period_seconds'];
    }
}