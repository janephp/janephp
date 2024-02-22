<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEvent extends ApplicationEvent
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
     * @var list<BusinessRuleFiredEventDetail>|null
     */
    protected $details;
    /**
     * 
     *
     * @return list<BusinessRuleFiredEventDetail>|null
     */
    public function getDetails() : ?array
    {
        return $this->details;
    }
    /**
     * 
     *
     * @param list<BusinessRuleFiredEventDetail>|null $details
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