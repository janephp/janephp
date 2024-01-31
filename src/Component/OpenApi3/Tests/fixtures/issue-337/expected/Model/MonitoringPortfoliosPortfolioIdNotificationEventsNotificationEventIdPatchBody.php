<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody extends \ArrayObject
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
     * @var bool
     */
    protected $isProcessed;
    /**
     * 
     *
     * @return bool
     */
    public function getIsProcessed() : bool
    {
        return $this->isProcessed;
    }
    /**
     * 
     *
     * @param bool $isProcessed
     *
     * @return self
     */
    public function setIsProcessed(bool $isProcessed) : self
    {
        $this->initialized['isProcessed'] = true;
        $this->isProcessed = $isProcessed;
        return $this;
    }
}