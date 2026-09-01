<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class SubmittedFreshInvestigationRepsonse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $correlationId;
    /**
     * @var string
     */
    public string $message;
    /**
     * Fresh Investigation Unique Identifier
     *
     * @var string
     */
    public string $orderID;
    /**
     * Fresh Investigation Internal Identifier
     *
     * @var string
     */
    public string $transactionID;
    public function definedProperties(): array
    {
        return ['correlationId' => 'correlationId', 'message' => 'message', 'orderID' => 'orderID', 'transactionID' => 'transactionID'];
    }
}