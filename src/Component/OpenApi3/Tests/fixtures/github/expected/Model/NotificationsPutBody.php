<?php

namespace Github\Model;

class NotificationsPutBody extends \ArrayObject
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
     * Describes the last point that notifications were checked.
     *
     * @var \DateTime
     */
    protected $lastReadAt;
    /**
     * Whether the notification has been read.
     *
     * @var bool
     */
    protected $read;
    /**
     * Describes the last point that notifications were checked.
     *
     * @return \DateTime
     */
    public function getLastReadAt() : \DateTime
    {
        return $this->lastReadAt;
    }
    /**
     * Describes the last point that notifications were checked.
     *
     * @param \DateTime $lastReadAt
     *
     * @return self
     */
    public function setLastReadAt(\DateTime $lastReadAt) : self
    {
        $this->initialized['lastReadAt'] = true;
        $this->lastReadAt = $lastReadAt;
        return $this;
    }
    /**
     * Whether the notification has been read.
     *
     * @return bool
     */
    public function getRead() : bool
    {
        return $this->read;
    }
    /**
     * Whether the notification has been read.
     *
     * @param bool $read
     *
     * @return self
     */
    public function setRead(bool $read) : self
    {
        $this->initialized['read'] = true;
        $this->read = $read;
        return $this;
    }
}