<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListFreshInvestigationResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var int
     */
    public int $totalCount;
    /**
     * @var list<ListFreshInvestigationResponseOrdersItem>
     */
    public array $orders;
    public function definedProperties(): array
    {
        return ['totalCount' => 'totalCount', 'orders' => 'orders'];
    }
}