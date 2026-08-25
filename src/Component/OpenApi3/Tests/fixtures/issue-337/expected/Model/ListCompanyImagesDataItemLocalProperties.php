<?php

namespace CreditSafe\API\Model;

use CreditSafe\API\Runtime\AdditionalAndPatternProperties;
use CreditSafe\API\Runtime\AdditionalPropertiesInterface;
class ListCompanyImagesDataItemLocalProperties implements AdditionalPropertiesInterface
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
    protected $accountRefNumber;
    /**
     * @return string
     */
    public function getAccountRefNumber(): string
    {
        return $this->accountRefNumber;
    }
    /**
     * @param string $accountRefNumber
     *
     * @return self
     */
    public function setAccountRefNumber(string $accountRefNumber): self
    {
        $this->initialized['accountRefNumber'] = true;
        $this->accountRefNumber = $accountRefNumber;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['accountRefNumber' => ['accountRefNumber', 'getAccountRefNumber', 'setAccountRefNumber']];
    }
}