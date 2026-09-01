<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $date;
    /**
     * @var string
     */
    public string $event;
    /**
     * @var string
     */
    public string $note;
    /**
     * @var string
     */
    public string $user;
    public function definedProperties(): array
    {
        return ['date' => 'date', 'event' => 'event', 'note' => 'note', 'user' => 'user'];
    }
}