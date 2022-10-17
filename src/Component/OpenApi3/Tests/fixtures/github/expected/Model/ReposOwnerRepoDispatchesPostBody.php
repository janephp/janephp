<?php

namespace Github\Model;

class ReposOwnerRepoDispatchesPostBody extends \ArrayObject
{
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
        $this->clientPayload = $clientPayload;
        return $this;
    }
}