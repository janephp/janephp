<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $record;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails $recordDetails;
    /**
     * @var int
     */
    public int $resultID;
    /**
     * @var int
     */
    public int $runID;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemWatchlist $watchlist;
    public function definedProperties(): array
    {
        return ['record' => 'record', 'recordDetails' => 'recordDetails', 'resultID' => 'resultID', 'runID' => 'runID', 'watchlist' => 'watchlist'];
    }
}