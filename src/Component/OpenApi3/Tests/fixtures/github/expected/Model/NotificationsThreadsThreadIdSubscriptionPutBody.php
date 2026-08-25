<?php

namespace Github\Model;

use Github\Runtime\AdditionalAndPatternProperties;
use Github\Runtime\AdditionalPropertiesInterface;
class NotificationsThreadsThreadIdSubscriptionPutBody implements AdditionalPropertiesInterface
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
     * Whether to block all notifications from a thread.
     *
     * @var bool
     */
    protected $ignored = false;
    /**
     * Whether to block all notifications from a thread.
     *
     * @return bool
     */
    public function getIgnored(): bool
    {
        return $this->ignored;
    }
    /**
     * Whether to block all notifications from a thread.
     *
     * @param bool $ignored
     *
     * @return self
     */
    public function setIgnored(bool $ignored): self
    {
        $this->initialized['ignored'] = true;
        $this->ignored = $ignored;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['ignored' => ['ignored', 'getIgnored', 'setIgnored']];
    }
}