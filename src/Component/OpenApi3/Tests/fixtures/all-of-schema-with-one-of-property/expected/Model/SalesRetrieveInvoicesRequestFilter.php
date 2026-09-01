<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class SalesRetrieveInvoicesRequestFilter implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
    public function definedProperties(): array
    {
        return ['invoiceIds' => 'invoiceIds', 'links' => 'links', 'includePositions' => 'includePositions'];
    }
}