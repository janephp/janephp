<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class SearchNoResultsErrorMessages implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $code;
    /**
     * @var string
     */
    public string $text;
    /**
     * @var string
     */
    public string $type;
    public function definedProperties(): array
    {
        return ['code' => 'code', 'text' => 'text', 'type' => 'type'];
    }
}