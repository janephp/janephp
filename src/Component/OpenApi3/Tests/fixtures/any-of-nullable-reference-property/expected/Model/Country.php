<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Country implements AdditionalPropertiesInterface
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
    protected $iso;
    /**
     * @var string
     */
    protected $printableName;
    /**
     * @return string
     */
    public function getIso(): string
    {
        return $this->iso;
    }
    /**
     * @param string $iso
     *
     * @return self
     */
    public function setIso(string $iso): self
    {
        $this->initialized['iso'] = true;
        $this->iso = $iso;
        return $this;
    }
    /**
     * @return string
     */
    public function getPrintableName(): string
    {
        return $this->printableName;
    }
    /**
     * @param string $printableName
     *
     * @return self
     */
    public function setPrintableName(string $printableName): self
    {
        $this->initialized['printableName'] = true;
        $this->printableName = $printableName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['iso' => ['iso', 'getIso', 'setIso'], 'printableName' => ['printableName', 'getPrintableName', 'setPrintableName']];
    }
}