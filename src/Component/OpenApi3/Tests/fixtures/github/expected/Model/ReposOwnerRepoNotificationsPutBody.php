<?php

namespace Github\Model;

class ReposOwnerRepoNotificationsPutBody extends \ArrayObject
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
     * Describes the last point that notifications were checked. Anything updated since this time will not be marked as read. If you omit this parameter, all notifications are marked as read. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. Default: The current timestamp.
     *
     * @var string
     */
    protected $lastReadAt;
    /**
     * Describes the last point that notifications were checked. Anything updated since this time will not be marked as read. If you omit this parameter, all notifications are marked as read. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. Default: The current timestamp.
     *
     * @return string
     */
    public function getLastReadAt() : string
    {
        return $this->lastReadAt;
    }
    /**
     * Describes the last point that notifications were checked. Anything updated since this time will not be marked as read. If you omit this parameter, all notifications are marked as read. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. Default: The current timestamp.
     *
     * @param string $lastReadAt
     *
     * @return self
     */
    public function setLastReadAt(string $lastReadAt) : self
    {
        $this->initialized['lastReadAt'] = true;
        $this->lastReadAt = $lastReadAt;
        return $this;
    }
}