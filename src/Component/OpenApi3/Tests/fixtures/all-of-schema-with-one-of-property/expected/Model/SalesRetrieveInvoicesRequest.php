<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SalesRetrieveInvoicesRequest extends SalesRetrieveSettlementRequestBase
{
    /**
     * @var SalesRetrieveInvoicesRequestFilter|null
     */
    public ?SalesRetrieveInvoicesRequestFilter $filter;
}