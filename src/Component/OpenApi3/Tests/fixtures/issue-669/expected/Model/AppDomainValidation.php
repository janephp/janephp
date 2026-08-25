<?php

namespace Jane\Generated\DigitalOcean\Model;

use Jane\Generated\DigitalOcean\Runtime\AdditionalAndPatternProperties;
use Jane\Generated\DigitalOcean\Runtime\AdditionalPropertiesInterface;
class AppDomainValidation implements AdditionalPropertiesInterface
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
    protected $txtName;
    /**
     * @var string
     */
    protected $txtValue;
    /**
     * @return string
     */
    public function getTxtName(): string
    {
        return $this->txtName;
    }
    /**
     * @param string $txtName
     *
     * @return self
     */
    public function setTxtName(string $txtName): self
    {
        $this->initialized['txtName'] = true;
        $this->txtName = $txtName;
        return $this;
    }
    /**
     * @return string
     */
    public function getTxtValue(): string
    {
        return $this->txtValue;
    }
    /**
     * @param string $txtValue
     *
     * @return self
     */
    public function setTxtValue(string $txtValue): self
    {
        $this->initialized['txtValue'] = true;
        $this->txtValue = $txtValue;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['txtName' => ['txt_name', 'getTxtName', 'setTxtName'], 'txtValue' => ['txt_value', 'getTxtValue', 'setTxtValue']];
    }
}