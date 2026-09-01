<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class NotificationEventsResponse implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The total number of events returned for the given company.
     *
     * @var float
     */
    public float $totalCount;
    /**
     * @var list<NotificationEvent>
     */
    public array $data;
    /**
     * Paging parameters.
     *
     * @var Paging
     */
    public Paging $paging;
    public function definedProperties(): array
    {
        return ['totalCount' => 'totalCount', 'data' => 'data', 'paging' => 'paging'];
    }
}