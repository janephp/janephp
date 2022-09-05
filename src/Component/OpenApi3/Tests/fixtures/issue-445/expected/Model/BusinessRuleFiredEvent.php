<?php

namespace PicturePark\API\Model;

class BusinessRuleFiredEvent extends ApplicationEvent
{
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
        $this->details = $details;
        return $this;
    }
}