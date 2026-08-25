<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppJobInvocationTriggerManual implements AdditionalPropertiesInterface
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
     * The user who triggered the job
     *
     * @var AppJobInvocationTriggerManualUser
     */
    protected $user;
    /**
     * The user who triggered the job
     *
     * @return AppJobInvocationTriggerManualUser
     */
    public function getUser(): AppJobInvocationTriggerManualUser
    {
        return $this->user;
    }
    /**
     * The user who triggered the job
     *
     * @param AppJobInvocationTriggerManualUser $user
     *
     * @return self
     */
    public function setUser(AppJobInvocationTriggerManualUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['user' => ['user', 'getUser', 'setUser']];
    }
}