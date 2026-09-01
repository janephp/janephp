<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppWorkerSpecTermination implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The number of seconds to wait between sending a TERM signal to a container and issuing a KILL which causes immediate shutdown. (Default 120)
     *
     * @var int
     */
    public int $gracePeriodSeconds;
    public function definedProperties(): array
    {
        return ['gracePeriodSeconds' => 'grace_period_seconds'];
    }
}