<?php

namespace Github\Model;

class ReposOwnerRepoDispatchesPostBody extends \ArrayObject
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
     * **Required:** A custom webhook event name.
     *
     * @var string
     */
    protected $eventType;
    /**
     * JSON payload with extra information about the webhook event that your action or worklow may use.
     *
     * @var mixed[]
     */
    protected $clientPayload;
    /**
     * **Required:** A custom webhook event name.
     *
     * @return string
     */
    public function getEventType() : string
    {
        return $this->eventType;
    }
    /**
     * **Required:** A custom webhook event name.
     *
     * @param string $eventType
     *
     * @return self
     */
    public function setEventType(string $eventType) : self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;
        return $this;
    }
    /**
     * JSON payload with extra information about the webhook event that your action or worklow may use.
     *
     * @return mixed[]
     */
    public function getClientPayload() : iterable
    {
        return $this->clientPayload;
    }
    /**
     * JSON payload with extra information about the webhook event that your action or worklow may use.
     *
     * @param mixed[] $clientPayload
     *
     * @return self
     */
    public function setClientPayload(iterable $clientPayload) : self
    {
        $this->initialized['clientPayload'] = true;
        $this->clientPayload = $clientPayload;
        return $this;
    }
}