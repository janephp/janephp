<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class Paging implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The maximum number of results returned per page.
     *
     * @var float
     */
    public float $size;
    /**
     * The page number of the previous page, null if there is no previous page available.
     *
     * @var float
     */
    public float $prev;
    /**
     * The page number of the next page, null if there is no next page available.
     *
     * @var float
     */
    public float $next;
    /**
     * The page number of the last page.
     *
     * @var float
     */
    public float $last;
    public function definedProperties(): array
    {
        return ['size' => 'size', 'prev' => 'prev', 'next' => 'next', 'last' => 'last'];
    }
}