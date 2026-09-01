<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class MonitoringPortfoliosPortfolioIdNotificationEventsNotificationEventIdPatchBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $isProcessed;
    public function definedProperties(): array
    {
        return ['isProcessed' => 'isProcessed'];
    }
}