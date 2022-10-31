<?php

namespace Github\Model;

class OrgsOrgHooksPostBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Must be passed as "web".
     *
     * @var string
     */
    protected $name;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/orgs/hooks/#create-hook-config-params).
     *
     * @var OrgsOrgHooksPostBodyConfig
     */
    protected $config;
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for.
     *
     * @var string[]
     */
    protected $events = array(0 => 'push');
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @var bool
     */
    protected $active = true;
    /**
     * Must be passed as "web".
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Must be passed as "web".
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/orgs/hooks/#create-hook-config-params).
     *
     * @return OrgsOrgHooksPostBodyConfig
     */
    public function getConfig() : OrgsOrgHooksPostBodyConfig
    {
        return $this->config;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/orgs/hooks/#create-hook-config-params).
     *
     * @param OrgsOrgHooksPostBodyConfig $config
     *
     * @return self
     */
    public function setConfig(OrgsOrgHooksPostBodyConfig $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for.
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for.
     *
     * @param string[] $events
     *
     * @return self
     */
    public function setEvents(array $events) : self
    {
        $this->initialized['events'] = true;
        $this->events = $events;
        return $this;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
        return $this;
    }
}