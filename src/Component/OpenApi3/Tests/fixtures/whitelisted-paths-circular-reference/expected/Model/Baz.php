<?php

namespace Jane\Component\OpenApi3\Tests\Expected\Model;

use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalAndPatternProperties;
use Jane\Component\OpenApi3\Tests\Expected\Runtime\AdditionalPropertiesInterface;
class Baz implements AdditionalPropertiesInterface
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
    protected $label;
    /**
     * @var SubBaz
     */
    protected $sub;
    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * @return SubBaz
     */
    public function getSub(): SubBaz
    {
        return $this->sub;
    }
    /**
     * @param SubBaz $sub
     *
     * @return self
     */
    public function setSub(SubBaz $sub): self
    {
        $this->initialized['sub'] = true;
        $this->sub = $sub;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['label' => ['label', 'getLabel', 'setLabel'], 'sub' => ['sub', 'getSub', 'setSub']];
    }
}