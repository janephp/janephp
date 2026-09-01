<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

class SalesInvoiceFilter
{
    /**
     * @var list<string>|null
     */
    public ?array $invoiceIds;
    /**
     * @var list<LinkLinkBase>|list<LinkInvoiceLink>|null
     */
    public ?array $links;
    /**
     * @var bool|null
     */
    public ?bool $includePositions;
}