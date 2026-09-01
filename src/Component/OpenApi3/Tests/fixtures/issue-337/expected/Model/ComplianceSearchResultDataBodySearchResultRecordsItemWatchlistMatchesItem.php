<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $acceptListID;
    /**
     * @var bool
     */
    public bool $addedToAcceptList;
    /**
     * @var bool
     */
    public bool $addressName;
    /**
     * @var bool
     */
    public bool $autoFalsePositive;
    /**
     * @var bool
     */
    public bool $bestAddressIsPartial;
    /**
     * @var int
     */
    public int $bestCountryScore;
    /**
     * @var string
     */
    public string $bestCountryType;
    /**
     * @var bool
     */
    public bool $bestDOBIsPartial;
    /**
     * @var string
     */
    public string $bestName;
    /**
     * @var int
     */
    public int $bestNameScore;
    /**
     * @var int
     */
    public int $checkSum;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemConflicts $conflicts;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemEntityDetails $entityDetails;
    /**
     * @var string
     */
    public string $entityName;
    /**
     * @var int
     */
    public int $entityScore;
    /**
     * @var string
     */
    public string $entityUniqueID;
    /**
     * @var bool
     */
    public bool $falsePositive;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemWatchlistMatchesItemFile $file;
    /**
     * @var bool
     */
    public bool $gatewayOFACScreeningIndicatorMatch;
    /**
     * @var int
     */
    public int $id;
    /**
     * @var bool
     */
    public bool $matchReAlert;
    /**
     * @var int
     */
    public int $previousResultID;
    /**
     * @var string
     */
    public string $reasonListed;
    /**
     * @var string
     */
    public string $resultDate;
    /**
     * @var bool
     */
    public bool $secondaryOFACScreeningIndicatorMatch;
    /**
     * @var bool
     */
    public bool $trueMatch;
    public function definedProperties(): array
    {
        return ['acceptListID' => 'acceptListID', 'addedToAcceptList' => 'addedToAcceptList', 'addressName' => 'addressName', 'autoFalsePositive' => 'autoFalsePositive', 'bestAddressIsPartial' => 'bestAddressIsPartial', 'bestCountryScore' => 'bestCountryScore', 'bestCountryType' => 'bestCountryType', 'bestDOBIsPartial' => 'bestDOBIsPartial', 'bestName' => 'bestName', 'bestNameScore' => 'bestNameScore', 'checkSum' => 'checkSum', 'conflicts' => 'conflicts', 'entityDetails' => 'entityDetails', 'entityName' => 'entityName', 'entityScore' => 'entityScore', 'entityUniqueID' => 'entityUniqueID', 'falsePositive' => 'falsePositive', 'file' => 'file', 'gatewayOFACScreeningIndicatorMatch' => 'gatewayOFACScreeningIndicatorMatch', 'id' => 'id', 'matchReAlert' => 'matchReAlert', 'previousResultID' => 'previousResultID', 'reasonListed' => 'reasonListed', 'resultDate' => 'resultDate', 'secondaryOFACScreeningIndicatorMatch' => 'secondaryOFACScreeningIndicatorMatch', 'trueMatch' => 'trueMatch'];
    }
}