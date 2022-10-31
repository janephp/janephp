<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEvent extends ApplicationEvent
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
     * 
     *
     * @var BusinessRuleFiredEventDetail[]|null
     */
    protected $details;
    /**
     * 
     *
     * @return BusinessRuleFiredEventDetail[]|null
     */
    public function getDetails() : ?array
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param BusinessRuleFiredEventDetail[]|null $details
     *
     * @return self
     */
    public function setDetails(?array $details) : self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}