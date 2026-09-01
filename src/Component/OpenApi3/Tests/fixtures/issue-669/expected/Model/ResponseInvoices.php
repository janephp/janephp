<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseInvoices implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var list<InvoicePreview>
     */
    public array $invoices;
    /**
     * The invoice preview.
     *
     * @var InvoicePreview
     */
    public InvoicePreview $invoicePreview;
    /**
     * @var PageLinks
     */
    public PageLinks $links;
    /**
     * @var MetaMeta
     */
    public MetaMeta $meta;
    public function definedProperties(): array
    {
        return ['invoices' => 'invoices', 'invoicePreview' => 'invoice_preview', 'links' => 'links', 'meta' => 'meta'];
    }
}