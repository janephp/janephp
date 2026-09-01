<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListFreshInvestigationResponseOrdersItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $orderID;
    /**
     * @var string
     */
    public string $userID;
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
    public int $transactionID;
    /**
     * @var string
     */
    public string $chargeReference;
    /**
     * @var ListFreshInvestigationResponseOrdersItemContactDetails
     */
    public ListFreshInvestigationResponseOrdersItemContactDetails $contactDetails;
    /**
     * @var ListFreshInvestigationResponseOrdersItemStatus
     */
    public ListFreshInvestigationResponseOrdersItemStatus $status;
    /**
     * @var bool
     */
    public bool $consent;
    /**
     * @var ListFreshInvestigationResponseOrdersItemSearchCriteria
     */
    public ListFreshInvestigationResponseOrdersItemSearchCriteria $searchCriteria;
    public function definedProperties(): array
    {
        return ['orderID' => 'orderID', 'userID' => 'userID', 'creationDate' => 'creationDate', 'lastStatusChangeDate' => 'lastStatusChangeDate', 'transactionID' => 'transactionID', 'chargeReference' => 'chargeReference', 'contactDetails' => 'contactDetails', 'status' => 'status', 'consent' => 'consent', 'searchCriteria' => 'searchCriteria'];
    }
}