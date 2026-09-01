<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem>
     */
    public array $matches;
    /**
     * @var string
     */
    public string $status;
    public function definedProperties(): array
    {
        return ['matches' => 'matches', 'status' => 'status'];
    }
}