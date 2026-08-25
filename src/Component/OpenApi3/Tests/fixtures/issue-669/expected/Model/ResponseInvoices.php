<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class ResponseInvoices implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<InvoicePreview>
     */
    protected $invoices;
    /**
     * The invoice preview.
     *
     * @var InvoicePreview
     */
    protected $invoicePreview;
    /**
     * @var PageLinks
     */
    protected $links;
    /**
     * @var MetaMeta
     */
    protected $meta;
    /**
     * @return list<InvoicePreview>
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }
    /**
     * @param list<InvoicePreview> $invoices
     *
     * @return self
     */
    public function setInvoices(array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;
        return $this;
    }
    /**
     * The invoice preview.
     *
     * @return InvoicePreview
     */
    public function getInvoicePreview(): InvoicePreview
    {
        return $this->invoicePreview;
    }
    /**
     * The invoice preview.
     *
     * @param InvoicePreview $invoicePreview
     *
     * @return self
     */
    public function setInvoicePreview(InvoicePreview $invoicePreview): self
    {
        $this->initialized['invoicePreview'] = true;
        $this->invoicePreview = $invoicePreview;
        return $this;
    }
    /**
     * @return PageLinks
     */
    public function getLinks(): PageLinks
    {
        return $this->links;
    }
    /**
     * @param PageLinks $links
     *
     * @return self
     */
    public function setLinks(PageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;
        return $this;
    }
    /**
     * @return MetaMeta
     */
    public function getMeta(): MetaMeta
    {
        return $this->meta;
    }
    /**
     * @param MetaMeta $meta
     *
     * @return self
     */
    public function setMeta(MetaMeta $meta): self
    {
        $this->initialized['meta'] = true;
        $this->meta = $meta;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['invoices' => ['invoices', 'getInvoices', 'setInvoices'], 'invoicePreview' => ['invoice_preview', 'getInvoicePreview', 'setInvoicePreview'], 'links' => ['links', 'getLinks', 'setLinks'], 'meta' => ['meta', 'getMeta', 'setMeta']];
    }
}