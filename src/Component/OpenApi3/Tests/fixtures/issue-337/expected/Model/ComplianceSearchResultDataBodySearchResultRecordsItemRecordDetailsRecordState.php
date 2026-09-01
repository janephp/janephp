<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordState implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var bool
     */
    public bool $addedToAcceptList;
    /**
     * @var string
     */
    public string $alertState;
    /**
     * @var list<string>
     */
    public array $assignedTo;
    /**
     * @var string
     */
    public string $assignmentType;
    /**
     * @var string
     */
    public string $division;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateHistoryItem>
     */
    public array $history;
    /**
     * @var list<ComplianceSearchResultDataBodySearchResultRecordsItemRecordDetailsRecordStateMatchStatesItem>
     */
    public array $matchStates;
    public function definedProperties(): array
    {
        return ['addedToAcceptList' => 'addedToAcceptList', 'alertState' => 'alertState', 'assignedTo' => 'assignedTo', 'assignmentType' => 'assignmentType', 'division' => 'division', 'history' => 'history', 'matchStates' => 'matchStates'];
    }
}