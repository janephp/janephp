<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class BadRequestError implements AdditionalPropertiesInterface
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
     * Provides further information on why the request was rejected
     *
     * @var string
     */
    public string $details;
    public function definedProperties(): array
    {
        return ['correlationId' => 'correlationId', 'message' => 'message', 'details' => 'details'];
    }
}