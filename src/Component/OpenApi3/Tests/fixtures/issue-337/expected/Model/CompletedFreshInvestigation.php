<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class CompletedFreshInvestigation implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var string
     */
    public string $chargeReference;
    /**
     * @var CompletedFreshInvestigationContactDetails
     */
    public CompletedFreshInvestigationContactDetails $contactDetails;
    /**
     * @var string
     */
    public string $creationDate;
    /**
     * @var string
     */
    public string $lastStatusChangeDate;
    /**
     * @var int
     */
    public int $orderID;
    /**
     * @var string
     */
    public string $reportDate;
    /**
     * @var CompletedFreshInvestigationSearchCriteria
     */
    public CompletedFreshInvestigationSearchCriteria $searchCriteria;
    /**
     * @var list<CompletedFreshInvestigationSectionsItemAnyOf>
     */
    public array $sections;
    /**
     * @var CompletedFreshInvestigationStatus
     */
    public CompletedFreshInvestigationStatus $status;
    /**
     * @var int
     */
    public int $transactionID;
    public function definedProperties(): array
    {
        return ['chargeReference' => 'chargeReference', 'contactDetails' => 'contactDetails', 'creationDate' => 'creationDate', 'lastStatusChangeDate' => 'lastStatusChangeDate', 'orderID' => 'orderID', 'reportDate' => 'reportDate', 'searchCriteria' => 'searchCriteria', 'sections' => 'sections', 'status' => 'status', 'transactionID' => 'transactionID'];
    }
}