<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var bool
     */
    protected $isProcessed;
    /**
     * @return bool
     */
    public function getIsProcessed(): bool
    {
        return $this->isProcessed;
    }
    /**
     * @param bool $isProcessed
     *
     * @return self
     */
    public function setIsProcessed(bool $isProcessed): self
    {
        $this->initialized['isProcessed'] = true;
        $this->isProcessed = $isProcessed;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['isProcessed' => ['isProcessed', 'getIsProcessed', 'setIsProcessed']];
    }
}