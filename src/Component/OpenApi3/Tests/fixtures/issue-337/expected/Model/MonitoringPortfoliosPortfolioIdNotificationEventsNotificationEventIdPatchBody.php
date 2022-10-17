<?php

namespace CreditSafe\API\Model;

class MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody extends \ArrayObject
{
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
        $this->isProcessed = $isProcessed;
        return $this;
    }
}