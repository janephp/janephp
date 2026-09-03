<?php

namespace Jane\Component\OpenApi3\Tests\Expected\AllOfSchemaWithOneOfProperty\Model;

class SalesRetrieveInvoicesRequest extends SalesRetrieveSettlementRequestBase
{
    /**
     * @var SalesRetrieveInvoicesRequestFilter|null
     */
    public ?SalesRetrieveInvoicesRequestFilter $filter;
}