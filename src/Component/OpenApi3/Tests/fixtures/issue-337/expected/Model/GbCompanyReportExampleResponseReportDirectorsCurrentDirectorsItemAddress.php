<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $simpleValue;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @return string
     */
    public function getSimpleValue(): string
    {
        return $this->simpleValue;
    }
    /**
     * @param string $simpleValue
     *
     * @return self
     */
    public function setSimpleValue(string $simpleValue): self
    {
        $this->initialized['simpleValue'] = true;
        $this->simpleValue = $simpleValue;
        return $this;
    }
    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['simpleValue' => ['simpleValue', 'getSimpleValue', 'setSimpleValue'], 'postalCode' => ['postalCode', 'getPostalCode', 'setPostalCode']];
    }
}