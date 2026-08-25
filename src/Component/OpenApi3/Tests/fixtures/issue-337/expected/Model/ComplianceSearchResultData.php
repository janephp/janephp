<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ComplianceSearchResultData implements AdditionalPropertiesInterface
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
     * @var ComplianceSearchResultDataBody
     */
    protected $body;
    /**
     * @return ComplianceSearchResultDataBody
     */
    public function getBody(): ComplianceSearchResultDataBody
    {
        return $this->body;
    }
    /**
     * @param ComplianceSearchResultDataBody $body
     *
     * @return self
     */
    public function setBody(ComplianceSearchResultDataBody $body): self
    {
        $this->initialized['body'] = true;
        $this->body = $body;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['body' => ['body', 'getBody', 'setBody']];
    }
}