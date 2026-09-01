<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetails implements AdditionalPropertiesInterface
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
     * @var string
     */
    public string $division;
    /**
     * @var string
     */
    public string $dppa;
    /**
     * @var string
     */
    public string $eftType;
    /**
     * @var string
     */
    public string $entityType;
    /**
     * @var string
     */
    public string $gender;
    /**
     * @var int
     */
    public int $glb;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsIDsItem>
     */
    public array $iDs;
    /**
     * @var string
     */
    public string $lastUpdatedDate;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsName $name;
    /**
     * @var ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState
     */
    public ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState $recordState;
    /**
     * @var string
     */
    public string $searchDate;
    public function definedProperties(): array
    {
        return ['acceptListID' => 'acceptListID', 'addedToAcceptList' => 'addedToAcceptList', 'division' => 'division', 'dppa' => 'dppa', 'eftType' => 'eftType', 'entityType' => 'entityType', 'gender' => 'gender', 'glb' => 'glb', 'iDs' => 'iDs', 'lastUpdatedDate' => 'lastUpdatedDate', 'name' => 'name', 'recordState' => 'recordState', 'searchDate' => 'searchDate'];
    }
}