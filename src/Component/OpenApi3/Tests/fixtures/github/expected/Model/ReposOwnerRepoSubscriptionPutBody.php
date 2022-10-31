<?php

namespace Github\Model;

class ReposOwnerRepoSubscriptionPutBody extends \ArrayObject
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
     * Determines if notifications should be received from this repository.
     *
     * @var bool
     */
    protected $subscribed;
    /**
     * Determines if all notifications should be blocked from this repository.
     *
     * @var bool
     */
    protected $ignored;
    /**
     * Determines if notifications should be received from this repository.
     *
     * @return bool
     */
    public function getSubscribed() : bool
    {
        return $this->subscribed;
    }
    /**
     * Determines if notifications should be received from this repository.
     *
     * @param bool $subscribed
     *
     * @return self
     */
    public function setSubscribed(bool $subscribed) : self
    {
        $this->initialized['subscribed'] = true;
        $this->subscribed = $subscribed;
        return $this;
    }
    /**
     * Determines if all notifications should be blocked from this repository.
     *
     * @return bool
     */
    public function getIgnored() : bool
    {
        return $this->ignored;
    }
    /**
     * Determines if all notifications should be blocked from this repository.
     *
     * @param bool $ignored
     *
     * @return self
     */
    public function setIgnored(bool $ignored) : self
    {
        $this->initialized['ignored'] = true;
        $this->ignored = $ignored;
        return $this;
    }
}