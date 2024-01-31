<?php

namespace Github\Model;

class ReposOwnerRepoHooksHookIdPatchBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/repos/hooks/#create-hook-config-params).
     *
     * @var ReposOwnerRepoHooksHookIdPatchBodyConfig
     */
    protected $config;
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     *
     * @var string[]
     */
    protected $events = array(0 => 'push');
    /**
     * Determines a list of events to be added to the list of events that the Hook triggers for.
     *
     * @var string[]
     */
    protected $addEvents;
    /**
     * Determines a list of events to be removed from the list of events that the Hook triggers for.
     *
     * @var string[]
     */
    protected $removeEvents;
    /**
     * Determines if notifications are sent when the webhook is triggered. Set to `true` to send notifications.
     *
     * @var bool
     */
    protected $active = true;
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/repos/hooks/#create-hook-config-params).
     *
     * @return ReposOwnerRepoHooksHookIdPatchBodyConfig
     */
    public function getConfig() : ReposOwnerRepoHooksHookIdPatchBodyConfig
    {
        return $this->config;
    }
    /**
     * Key/value pairs to provide settings for this webhook. [These are defined below](https://developer.github.com/v3/repos/hooks/#create-hook-config-params).
     *
     * @param ReposOwnerRepoHooksHookIdPatchBodyConfig $config
     *
     * @return self
     */
    public function setConfig(ReposOwnerRepoHooksHookIdPatchBodyConfig $config) : self
    {
        $this->initialized['config'] = true;
        $this->config = $config;
        return $this;
    }
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
     *
     * @return string[]
     */
    public function getEvents() : array
    {
        return $this->events;
    }
    /**
     * Determines what [events](https://developer.github.com/webhooks/event-payloads) the hook is triggered for. This replaces the entire array of events.
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
     * Determines a list of events to be added to the list of events that the Hook triggers for.
     *
     * @return string[]
     */
    public function getAddEvents() : array
    {
        return $this->addEvents;
    }
    /**
     * Determines a list of events to be added to the list of events that the Hook triggers for.
     *
     * @param string[] $addEvents
     *
     * @return self
     */
    public function setAddEvents(array $addEvents) : self
    {
        $this->initialized['addEvents'] = true;
        $this->addEvents = $addEvents;
        return $this;
    }
    /**
     * Determines a list of events to be removed from the list of events that the Hook triggers for.
     *
     * @return string[]
     */
    public function getRemoveEvents() : array
    {
        return $this->removeEvents;
    }
    /**
     * Determines a list of events to be removed from the list of events that the Hook triggers for.
     *
     * @param string[] $removeEvents
     *
     * @return self
     */
    public function setRemoveEvents(array $removeEvents) : self
    {
        $this->initialized['removeEvents'] = true;
        $this->removeEvents = $removeEvents;
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