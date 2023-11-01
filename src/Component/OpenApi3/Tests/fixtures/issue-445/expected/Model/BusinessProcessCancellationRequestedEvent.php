<?php

namespace PicturePark\API\Model;

class BusinessProcessCancellationRequestedEvent extends ApplicationEvent
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
     * 
     *
     * @var string|null
     */
    protected $businessProcessId;
    /**
     * 
     *
     * @return string|null
     */
    public function getBusinessProcessId() : ?string
    {
        return $this->businessProcessId;
    }
    /**
     * 
     *
     * @param string|null $businessProcessId
     *
     * @return self
     */
    public function setBusinessProcessId(?string $businessProcessId) : self
    {
        $this->initialized['businessProcessId'] = true;
        $this->businessProcessId = $businessProcessId;
        return $this;
    }
}