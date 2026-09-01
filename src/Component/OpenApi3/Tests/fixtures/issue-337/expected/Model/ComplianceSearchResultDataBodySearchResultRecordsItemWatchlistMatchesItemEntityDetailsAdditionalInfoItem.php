<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetailsAdditionalInfoItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $comments;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var string
     */
    public string $type;
    /**
     * @var string
     */
    public string $value;
    public function definedProperties(): array
    {
        return ['comments' => 'comments', 'id' => 'id', 'type' => 'type', 'value' => 'value'];
    }
}