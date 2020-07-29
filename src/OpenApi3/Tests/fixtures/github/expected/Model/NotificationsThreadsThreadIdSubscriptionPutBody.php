<?php

namespace Github\Model;

class NotificationsThreadsThreadIdSubscriptionPutBody
{
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
    public function getIgnored() : bool
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
    public function setIgnored(bool $ignored) : self
    {
        $this->ignored = $ignored;
        return $this;
    }
}