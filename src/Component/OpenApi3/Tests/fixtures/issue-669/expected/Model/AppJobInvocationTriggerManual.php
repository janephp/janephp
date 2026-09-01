<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerManual implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The user who triggered the job
     *
     * @var AppJobInvocationTriggerManualUser
     */
    public AppJobInvocationTriggerManualUser $user;
    public function definedProperties(): array
    {
        return ['user' => 'user'];
    }
}