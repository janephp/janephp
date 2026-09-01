<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class SearchNoResultsError implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var float
     */
    public float $totalSize;
    /**
     * @var array<string, mixed>
     */
    public iterable $companies;
    /**
     * @var SearchNoResultsErrorMessages
     */
    public SearchNoResultsErrorMessages $messages;
    public function definedProperties(): array
    {
        return ['totalSize' => 'totalSize', 'companies' => 'companies', 'messages' => 'messages'];
    }
}